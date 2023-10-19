<template>
    <div>
        <div
            id="dropContainer"
            @drop.prevent="handleDrop" @dragenter.prevent @dragover.prevent
            class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md ">
            <div class="space-y-1 text-center">
                <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none"
                     viewBox="0 0 48 48" aria-hidden="true">
                    <path
                        d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="flex text-sm text-gray-600">
                    <label for="file"
                           class="relative cursor-pointer rounded-md font-medium text-nhs-blue-100 hover:text-nhs-blue-100 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-nhs-blue-100">
                        <span class="font-medium text-nhs-blue-100 hover:text-nhs-blue-80">Click to upload a file</span>
                        <input id="file" name="file" type="file" class="sr-only" multiple
                               @change="handleSelect">
                    </label>
                </div>
                <p class="text-xs text-gray-500">File up to 5MB</p>
                <div id="file-display" class="text-xs text-gray-500"></div>
            </div>
        </div>

        <div v-if="errors" class="file-uploader-errors mt-4">
            <file-uploader-errors :error="errors"/>
        </div>

        <ol v-if="activeFiles.length > 0" class="mt-6 divide-y border border-l-0 border-r-0">
            <li v-for="file in activeFiles" class="py-4">
                <file-uploader-file :file="file" :document-types="documentTypes" @remove="handleItemRemove"/>
            </li>
        </ol>
    </div>
</template>

<script>
import {createApp} from "vue";
import FileUploaderFile from "./file-uploader-file";
import FileUploaderErrors from "./file-uploader-errors";
import FileUploaderSpinner from "./file-uploader-spinner";

export default {
    name: 'file-uploader',
    components: {
        FileUploaderSpinner,
        FileUploaderErrors,
        FileUploaderFile,
    },
    data() {
        return {
            files: [],
            errors: '',
            spinner: null
        }
    },

    props: {
        form: Element,
        documentTypes: Object
    },

    mounted() {
        this.form.addEventListener('submit', this.handleFormSubmit);
    },

    computed: {
        activeFiles() {
            return this.files.filter((item) => {
                return !item.removed;
            });
        }
    },
    methods: {
        handleDrop(evt) {
            for (const file of evt.dataTransfer.files) {
                this.files.push({file, type: null, removed: false});
            }
        },

        handleSelect(evt) {
            for (const file of evt.target.files) {
                this.files.push({file, type: null, removed: false});
            }
        },

        handleFormSubmit(evt) {
            evt.preventDefault();
            const form = evt.target;
            const button = form.querySelector('button[type=submit]');
            const formData = new FormData(form);

            button.disabled = true;

            if(!this.spinner) {
                this.spinner = document.createElement('div');
                this.spinner.classList.add('mr-2');
                button.prepend(this.spinner);
                createApp(FileUploaderSpinner).mount(this.spinner);
            }
            else {
                this.spinner.classList.remove('hidden');
            }

            this.activeFiles.forEach((item) => {
                formData.append('file[]', item.file)
                formData.append('fileType[]', item.type)
            });

            axios({
                method: form.getAttribute('method'),
                url: form.getAttribute('action'),
                data: formData,
                headers: {"Content-Type": "multipart/form-data", "Accepts": "application/json"},
            }).then((response) => {
                window.location.href = response.data.redirect;
            }).catch((error) => {
                button.disabled = false;
                this.spinner.classList.add('hidden');
                if (error.response) {
                    this.errors = error.response.data.errors;
                }
            })
        },

        handleItemRemove(item) {
            const key = this.files.indexOf(item);
            this.files[key].removed = true;
        }
    }
}
</script>
