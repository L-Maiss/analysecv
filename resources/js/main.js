// document.addEventListener('DOMContentLoaded', () => {

//     const dropZone = document.getElementById('drop-zone');
//     const fileInput = document.getElementById('resume');
//     const browseBtn = document.getElementById('browse-btn');
//     const fileName = document.getElementById('file-name');

//     // Open file picker
//     browseBtn.addEventListener('click', (e) => {
//         e.stopPropagation();
//         fileInput.click();
//     });

//     // Clicking anywhere in the drop zone opens the file picker
//     dropZone.addEventListener('click', () => {
//         fileInput.click();
//     });

//     // File selected through file picker
//     fileInput.addEventListener('change', () => {
//         updateFileName(fileInput.files);
//     });

//     // Drag enters the drop zone
//     dropZone.addEventListener('dragover', (e) => {
//         e.preventDefault();
//         dropZone.classList.add('dragover');
//     });

//     // Drag leaves the drop zone
//     dropZone.addEventListener('dragleave', () => {
//         dropZone.classList.remove('dragover');
//     });

//     // File dropped
//     dropZone.addEventListener('drop', (e) => {
//         e.preventDefault();

//         dropZone.classList.remove('dragover');

//         if (e.dataTransfer.files.length > 0) {
//             fileInput.files = e.dataTransfer.files;
//             updateFileName(fileInput.files);
//         }
//     });

//     function updateFileName(files) {
//         if (files.length === 0) {
//             fileName.textContent = '';
//             fileName.style.display = 'none';
//             return;
//         }

//         fileName.textContent = `Selected: ${files[0].name}`;
//         fileName.style.display = 'block';
//     }

// });