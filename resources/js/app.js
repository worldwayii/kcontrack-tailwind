import './bootstrap';
import {createApp} from 'vue';
import FileUploader from "./components/file-uploader.vue";

document.addEventListener("DOMContentLoaded", function () {
    if (document.getElementById('file-upload-form')) {
        loadFileUploaderComponent();
    }
});

function loadFileUploaderComponent() {
    let componentRenderElement = document.getElementById('file-upload');
    let dataTypes = JSON.parse(componentRenderElement.dataset.types)

    const form = document.getElementById('file-upload-form');
    const fileUploader = createApp(FileUploader, { form, documentTypes: dataTypes });
    fileUploader.mount(componentRenderElement);
}
