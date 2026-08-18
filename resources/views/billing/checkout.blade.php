<x-app-layout>

    <div class="max-w-3xl mx-auto px-4 py-10">
        <div class="bg-white rounded-2xl shadow-sm border border-gray-200 p-6">
            <div class="checkout-container"></div>
        </div>
    </div>

    <script>
        Paddle.Environment.set("sandbox");

        Paddle.Initialize({
            token: "{{ config('services.paddle.client_side_token') }}"
        });

        Paddle.Checkout.open({
            items: [
                {
                    priceId: "{{ $priceId }}",
                    quantity: 1
                }
            ],

            customer: {
                email: "{{ auth()->user()->email }}"
            },

            settings: {
                displayMode: "inline",
                frameTarget: "checkout-container",
                frameInitialHeight: "450",
                frameStyle: "width: 100%; min-width: 312px; background-color: transparent; border: none;"
            }
        });
    </script>

</x-app-layout>