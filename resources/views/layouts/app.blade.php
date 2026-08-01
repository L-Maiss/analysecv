<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
    <title>careerAI</title>

    @if(config('services.google_analytics.id'))
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id={{ config('services.google_analytics.id') }}"></script>

        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag(){
                dataLayer.push(arguments);
            }

            gtag('js', new Date());

            gtag('config', '{{ config('services.google_analytics.id') }}');
        </script>
    @endif
</head>
<body>
    
        @include('components.header.header')

        <div class="max-w-6xl mx-auto">

            @yield('content')

        </div>

        @include('components.footer.footer')

    <script>
        document.addEventListener('DOMContentLoaded', () => {

            const dropZone = document.getElementById('drop-zone');
            const fileInput = document.getElementById('resume');
            const browseBtn = document.getElementById('browse-btn');
            const fileName = document.getElementById('file-name');

            // Open file picker
            browseBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                fileInput.click();
            });

            // Clicking anywhere in the drop zone opens the file picker
            dropZone.addEventListener('click', () => {
                fileInput.click();
            });

            // File selected through file picker
            fileInput.addEventListener('change', () => {
                updateFileName(fileInput.files);
            });

            // Drag enters the drop zone
            dropZone.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropZone.classList.add('dragover');
            });

            // Drag leaves the drop zone
            dropZone.addEventListener('dragleave', () => {
                dropZone.classList.remove('dragover');
            });

            // File dropped
            dropZone.addEventListener('drop', (e) => {
                e.preventDefault();

                dropZone.classList.remove('dragover');

                if (e.dataTransfer.files.length > 0) {
                    fileInput.files = e.dataTransfer.files;
                    updateFileName(fileInput.files);
                }
            });

            function updateFileName(files) {
                if (files.length === 0) {
                    fileName.textContent = '';
                    fileName.style.display = 'none';
                    return;
                }

                fileName.textContent = `Selected: ${files[0].name}`;
                fileName.style.display = 'block';
            }

            // ----------------------------

            const dropZone2 = document.getElementById('drop-zone2');
            const fileInput2 = document.getElementById('resume2');
            const browseBtn2 = document.getElementById('browse-btn2');
            const fileName2 = document.getElementById('file-name2');

            // Open file picker
            browseBtn2.addEventListener('click', (e) => {
                e.stopPropagation();
                fileInput2.click();
            });

            // Clicking anywhere in the drop zone opens the file picker
            dropZone2.addEventListener('click', () => {
                fileInput2.click();
            });

            // File selected through file picker
            fileInput2.addEventListener('change', () => {
                updateFileName2(fileInput2.files);
            });

            // Drag enters the drop zone
            dropZone2.addEventListener('dragover', (e) => {
                e.preventDefault();
                dropZone2.classList.add('dragover');
            });

            // Drag leaves the drop zone
            dropZone2.addEventListener('dragleave', () => {
                dropZone2.classList.remove('dragover');
            });

            // File dropped
            dropZone2.addEventListener('drop', (e) => {
                e.preventDefault();

                dropZone2.classList.remove('dragover');

                if (e.dataTransfer.files.length > 0) {
                    fileInput2.files = e.dataTransfer.files;
                    updateFileName2(fileInput2.files);
                }
            });

            function updateFileName2(files) {
                if (files.length === 0) {
                    fileName2.textContent = '';
                    fileName2.style.display = 'none';
                    return;
                }

                fileName2.textContent = `Selected: ${files[0].name}`;
                fileName2.style.display = 'block';
            }


            // ---------------------------

        //     const form = document.querySelector("form");
        //     const overlay = document.getElementById("loading-overlay");
        //     const loadingText = document.getElementById("loading-text");

        //     const texts = [
        //         "Uploading your resume...",
        //         "Reading your resume...",
        //         "Comparing with the job description...",
        //         "Calculating ATS score...",
        //         "Generating suggestions...",
        //         "Preparing your report..."
        //     ];

        //     form.addEventListener("submit", function () {

        //         overlay.classList.remove("hidden");

        //         let index = 0;

        //         const interval = setInterval(() => {

        //             index++;

        //             if (index >= texts.length) {
        //                 clearInterval(interval);
        //                 return;
        //             }

        //             loadingText.textContent = texts[index];

        //         }, 2500);

        //     });

        });
    </script>
</body>
</html>