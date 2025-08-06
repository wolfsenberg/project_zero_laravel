@if (session()->has('message'))
    <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 1000)" x-show="show" id="overlay"
        class="fixed inset-0 bg-gray-800/70 flex items-center justify-center z-50">
        <div class="bg-blue-500 text-white px-10 py-3 rounded shadow-lg pointer-events-none">
            <p>{{ session('message') }}</p>
        </div>
    </div>

    <!--
    <script>
        function dismissMessage() {
            document.getElementById('overlay').remove();
        }
    </script>
    -->
@endif
