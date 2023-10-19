<template>
    <div class="flex justify-between items-center">
        <select name="" id="" @change="handleChange" class="shadow-sm focus:ring-nhs-blue-60 focus:border-nhs-blue-60 block text-sm border-gray-300 rounded-md max-w-lg w-full" required>
            <option value="" selected disabled>Please select</option>
            <option v-for="(value, key) in documentTypes" :value="key">
                {{ value }}
            </option>
        </select>

        <div class="flex items-center ml-4">
            <svg class="h-5 w-5 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <use href="/svg/heroicons.svg#outline-paper-clip" />
            </svg>
            <p class="text-sm">{{ fileName }}</p>
        </div>

        <button type="button" @click="handleRemove" class="text-xs text-nhs-red-80 ml-auto">
            <svg class="h-5 w-5 text-red-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <use href="/svg/heroicons.svg#solid-x-circle" />
            </svg>
        </button>
    </div>
</template>

<script>
export default {
    name: 'file-uploader-file',

    emits: ['change', 'remove'],

    props: {
        file: Object,
        documentTypes: Object
    },
    computed: {
        fileName() {
            const item = this.file;
            return item.file.name;
        }
    },
    methods: {
        handleChange(evt) {
            const item = this.file;
            item.type = evt.target.value;
            this.$emit('change', item);
        },
        handleRemove(evt) {
            const item = this.file;
            this.$emit('remove', item);
        }
    }
}
</script>

