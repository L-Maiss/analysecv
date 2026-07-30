    
    <div
        id="loading-overlay"
        class="hidden fixed inset-0 z-50 flex items-center justify-center bg-white/80 backdrop-blur-sm"
    >
        <div class="bg-white rounded-2xl shadow-2xl p-8 w-[420px] text-center">

            <div class="flex justify-center mb-6">
                <div class="w-14 h-14 border-4 border-purple-600 border-t-transparent rounded-full animate-spin"></div>
            </div>

            <h2 class="text-2xl font-bold text-gray-800">
                AI is analyzing your resume
            </h2>

            <p class="text-gray-500 mt-2">
                Please wait a few seconds.
            </p>

            <div class="mt-8">

                <p
                    id="loading-text"
                    class="text-purple-600 font-medium transition-all duration-300"
                >
                    Uploading your resume...
                </p>

            </div>

        </div>
    </div>

    <script>

        document.addEventListener('DOMContentLoaded', () => {

            // const form = document.querySelector("form");
            const form = document.getElementById("analyzer-form");
            const form2 = document.getElementById("comparison-form");

            const overlay = document.getElementById("loading-overlay");
            const loadingText = document.getElementById("loading-text");

            const texts = [
                "Uploading your resume...",
                "Reading your resume...",
                "Calculating ATS score...",
                "Generating suggestions...",
                "Preparing your report..."
            ];

            const texts2 = [
                "Uploading your resume...",
                "Reading your resume...",
                "Comparing with the job description...",
                "Calculating ATS score...",
                "Generating suggestions...",
                "Preparing your report..."
            ];

            form.addEventListener("submit", function () {

                overlay.classList.remove("hidden");

                let index = 0;

                const interval = setInterval(() => {

                    index++;

                    if (index >= texts.length) {
                        clearInterval(interval);
                        return;
                    }

                    loadingText.textContent = texts[index];

                }, 2500);

            });
            
            form2.addEventListener("submit", function () {

                overlay.classList.remove("hidden");

                let index = 0;

                const interval = setInterval(() => {

                    index++;

                    if (index >= texts2.length) {
                        clearInterval(interval);
                        return;
                    }

                    loadingText.textContent = texts2[index];

                }, 2500);

            });

        });
    </script>