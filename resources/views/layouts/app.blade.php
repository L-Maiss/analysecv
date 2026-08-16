<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @paddleJS
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
    <title>AnalyseCV</title>

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

    @if(config('services.microsoft_clarity.id'))
        <script type="text/javascript">
            (function(c,l,a,r,i,t,y){
                c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
                t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
                y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
            })(window, document, "clarity", "script", "{{ config('services.microsoft_clarity.id') }}");
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
            const analyzeBtn = document.getElementById("analyze-btn");
            const comparisonBtn = document.getElementById("comparison-btn");
            const jobDescription = document.getElementById("job-description");

            let uploaded = false;

            // Open file picker
            browseBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                fileInput.click();
            });

            // Clicking anywhere in the drop zone opens the file picker
            dropZone.addEventListener('click', (e) => {

                if (uploaded) {

                    // Allow clicking Remove button
                    if (e.target.closest('#remove-file')) {
                        return;
                    }

                    return;
                }

                fileInput.click();

            });

            // File selected through file picker
            fileInput.addEventListener('change', () => {
                updateFileName(fileInput.files);
            });

            // Drag enters the drop zone
            dropZone.addEventListener('dragover', (e) => {

                if (uploaded) return;

                e.preventDefault();

                dropZone.classList.add('dragover');

            });

            // Drag leaves the drop zone
            dropZone.addEventListener('dragleave', () => {
                dropZone.classList.remove('dragover');
            });

            // File dropped
            dropZone.addEventListener('drop', (e) => {

                if (uploaded) return;

                e.preventDefault();

                dropZone.classList.remove('dragover');

                if (e.dataTransfer.files.length > 0) {
                    fileInput.files = e.dataTransfer.files;
                    updateFileName(fileInput.files);
                }

            });

            function updateFileName(files) {

                if (!files.length) return;

                const file = files[0];

                const uploadState = document.getElementById("upload-state");
                const loadingState = document.getElementById("loading-state");
                const successState = document.getElementById("success-state");

                const title = document.getElementById("upload-title");
                const subtitle = document.getElementById("upload-subtitle");

                const browse = document.getElementById("browse-btn");

                const card = document.getElementById("uploaded-card");

                const name = document.getElementById("file-name");
                const size = document.getElementById("file-size");

                uploadState.classList.add("hidden");
                loadingState.classList.remove("hidden");

                title.innerHTML = "Uploading...";
                subtitle.innerHTML = "Please wait";

                setTimeout(() => {

                    loadingState.classList.add("hidden");
                    successState.classList.remove("hidden");

                    title.innerHTML = "Resume Uploaded";
                    subtitle.innerHTML = "Ready for analysis";

                    browse.classList.add("hidden");

                    name.textContent = file.name;
                    size.textContent =
                        `${(file.size / 1024 / 1024).toFixed(2)} MB`;

                    card.classList.remove("hidden");

                    uploaded = true;

                    analyzeBtn.disabled = false;

                    analyzeBtn.classList.remove(
                        "bg-gray-300",
                        "text-gray-500",
                        "cursor-not-allowed"
                    );

                    analyzeBtn.classList.add(
                        "bg-[#7C53EC]",
                        "text-white",
                        "hover:bg-[#7145ec]"
                    );

                    dropZone.classList.add("border-green-400","bg-green-50");
                    dropZone.classList.remove(
                        "hover:border-[#7C53EC]",
                        "hover:bg-[#7c53ec0d]",
                        "cursor-pointer"
                    );

                    dropZone.classList.add(
                        "cursor-default"
                    );

                },700);

            }

            // ----------------------------

            const dropZone2 = document.getElementById('drop-zone2');
            const fileInput2 = document.getElementById('resume2');
            const browseBtn2 = document.getElementById('browse-btn2');
            const fileName2 = document.getElementById('file-name2');

            let uploaded2 = false;

            // Open file picker
            browseBtn2.addEventListener('click', (e) => {
                e.stopPropagation();
                fileInput2.click();
            });

            // Clicking anywhere in the drop zone opens the file picker
            dropZone2.addEventListener('click', (e) => {

                if (uploaded2) {

                    if (e.target.closest('#remove-file2')) {
                        return;
                    }

                    return;
                }

                fileInput2.click();

            });

            // File selected through file picker
            fileInput2.addEventListener('change', () => {
                updateFileName2(fileInput2.files);
            });

            // Drag enters the drop zone
            dropZone2.addEventListener('dragover', (e) => {

                if (uploaded2) return;

                e.preventDefault();

                dropZone2.classList.add('dragover');

            });

            // Drag leaves the drop zone
            dropZone2.addEventListener('dragleave', () => {

                if (uploaded2) return;

                dropZone2.classList.remove('dragover');

            });

            // File dropped
            dropZone2.addEventListener('drop', (e) => {

                if (uploaded2) return;

                e.preventDefault();

                dropZone2.classList.remove('dragover');

                if (e.dataTransfer.files.length > 0) {

                    fileInput2.files = e.dataTransfer.files;

                    updateFileName2(fileInput2.files);

                }

            });

            function updateFileName2(files) {

                if (!files.length) return;

                const file = files[0];

                const uploadState = document.getElementById("upload-state2");
                const loadingState = document.getElementById("loading-state2");
                const successState = document.getElementById("success-state2");

                const title = document.getElementById("upload-title2");
                const subtitle = document.getElementById("upload-subtitle2");

                const browse = document.getElementById("browse-btn2");

                const card = document.getElementById("uploaded-card2");

                const name = document.getElementById("file-name2");
                const size = document.getElementById("file-size2");

                uploadState.classList.add("hidden");
                loadingState.classList.remove("hidden");

                title.innerHTML = "Uploading...";
                subtitle.innerHTML = "Please wait";

                setTimeout(() => {

                    loadingState.classList.add("hidden");
                    successState.classList.remove("hidden");

                    title.innerHTML = "Resume Uploaded";
                    subtitle.innerHTML = "Ready for comparison";

                    browse.classList.add("hidden");

                    name.textContent = file.name;
                    size.textContent =
                        `${(file.size / 1024 / 1024).toFixed(2)} MB`;

                    card.classList.remove("hidden");

                    uploaded2 = true;

                    updateComparisonButton();

                    dropZone2.classList.remove(
                        "hover:border-[#7C53EC]",
                        "hover:bg-[#7c53ec0d]",
                        "cursor-pointer"
                    );

                    dropZone2.classList.add(
                        "cursor-default",
                        "border-green-400",
                        "bg-green-50"
                    );

                }, 700);

            }

            document
            .getElementById("remove-file2")
            .addEventListener("click", function(e){

                e.preventDefault();
                e.stopPropagation();

                uploaded2 = false;

                updateComparisonButton();

                fileInput2.value = "";

                document.getElementById("uploaded-card2").classList.add("hidden");

                document.getElementById("success-state2").classList.add("hidden");

                document.getElementById("loading-state2").classList.add("hidden");

                document.getElementById("upload-state2").classList.remove("hidden");

                document.getElementById("browse-btn2").classList.remove("hidden");

                document.getElementById("upload-title2").innerHTML =
                    "Drag & Drop your Resume";

                document.getElementById("upload-subtitle2").innerHTML =
                    "PDF or DOCX (Max 5 MB)";

                dropZone2.classList.remove(
                    "border-green-400",
                    "bg-green-50",
                    "cursor-default"
                );

                dropZone2.classList.add(
                    "hover:border-[#7C53EC]",
                    "hover:bg-[#7c53ec0d]",
                    "cursor-pointer"
                );

            });


            document
            .getElementById("remove-file")
            .addEventListener("click", function(e){

                e.preventDefault();
                e.stopPropagation();

                uploaded = false;

                analyzeBtn.disabled = true;

                analyzeBtn.classList.remove(
                    "bg-[#7C53EC]",
                    "text-white",
                    "hover:bg-[#7145ec]"
                );

                analyzeBtn.classList.add(
                    "bg-gray-300",
                    "text-gray-500",
                    "cursor-not-allowed"
                );

                fileInput.value = "";

                document.getElementById("uploaded-card").classList.add("hidden");

                document.getElementById("success-state").classList.add("hidden");

                document.getElementById("loading-state").classList.add("hidden");

                document.getElementById("upload-state").classList.remove("hidden");

                document.getElementById("browse-btn").classList.remove("hidden");

                document.getElementById("upload-title").innerHTML =
                    "Drag & Drop your Resume";

                document.getElementById("upload-subtitle").innerHTML =
                    "PDF or DOCX (Max 5 MB)";

                dropZone.classList.remove("border-green-400","bg-green-50");

                dropZone.classList.add(
                    "hover:border-[#7C53EC]",
                    "hover:bg-[#7c53ec0d]",
                    "cursor-pointer"
                );

                dropZone.classList.remove(
                    "cursor-default"
                );

            });

            function updateComparisonButton() {

    const hasResume = uploaded2;

    const hasJobDescription =
        jobDescription.value.trim().length > 0;

    if (hasResume && hasJobDescription) {

        comparisonBtn.disabled = false;

        comparisonBtn.classList.remove(
            "bg-gray-300",
            "text-gray-500",
            "cursor-not-allowed"
        );

        comparisonBtn.classList.add(
            "bg-[#7C53EC]",
            "text-white",
            "hover:bg-[#7145ec]"
        );

    } else {

        comparisonBtn.disabled = true;

        comparisonBtn.classList.remove(
            "bg-[#7C53EC]",
            "text-white",
            "hover:bg-[#7145ec]"
        );

        comparisonBtn.classList.add(
            "bg-gray-300",
            "text-gray-500",
            "cursor-not-allowed"
        );

    }

}

jobDescription.addEventListener("input", updateComparisonButton);

        });
    </script>
</body>
</html> --}}