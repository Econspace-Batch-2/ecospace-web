<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<style>
    .drag-area {
        border: 2px dashed #ccc;
        width: 100%;
        height: 200px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-size: 16px;
        color: #aaa;
        margin: 20px 0;
    }

    .drag-area.dragging {
        border-color: #333;
    }
</style>
<h1>Drag and Drop File Upload</h1>
<div id="drag-area" class="drag-area">
    Drag and drop your file here, or click to upload.
</div>
<input type="file" id="file-input" style="display: none;">
<div id="upload-status"></div>

<script>
    const dragArea = document.getElementById('drag-area');
    const fileInput = document.getElementById('file-input');
    const uploadStatus = document.getElementById('upload-status');

    dragArea.addEventListener('click', () => fileInput.click());

    dragArea.addEventListener('dragover', (e) => {
        e.preventDefault();
        dragArea.classList.add('dragging');
    });

    dragArea.addEventListener('dragleave', () => dragArea.classList.remove('dragging'));

    dragArea.addEventListener('drop', (e) => {
        e.preventDefault();
        dragArea.classList.remove('dragging');
        handleFiles(e.dataTransfer.files);
    });

    fileInput.addEventListener('change', (e) => handleFiles(e.target.files));

    function handleFiles(files) {
        if (files.length > 0) {
            const formData = new FormData();
            formData.append('file', files[0]);

            // axios.post('{{ route('upload.handle') }}', formData, {
            //         headers: {
            //             'Content-Type': 'multipart/form-data',
            //         },
            //     })
            //     .then(response => {
            //         if (response.data.success) {
            //             uploadStatus.innerHTML = `<p>File uploaded successfully: ${response.data.path}</p>`;
            //         } else {
            //             uploadStatus.innerHTML = `<p>File upload failed</p>`;
            //         }
            //     })
            //     .catch(error => {
            //         uploadStatus.innerHTML = `<p>Error uploading file</p>`;
            //     });
        }
    }
</script>
