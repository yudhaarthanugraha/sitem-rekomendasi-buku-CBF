@include('admin.base.start')

<!-- component -->
<section class="min-h-screen flex items-center justify-center w-full dark:bg-gray-950">
    <div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md">
        <h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200">Welcome !</h1>
        <form action="{{ route('auth') }}" method="POST" class="w-full px-10">
          @csrf
            <div class="mb-4">
                <label for="username"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Username</label>
                <input name="username" type="text" id="username"
                    class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="masukan username" required>
            </div>
            <div class="mb-4">
                <label for="password"
                    class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Password</label>
                <input name="password" type="password" id="password"
                    class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                    placeholder="masukan password" required>
            </div>
            <div class="flex items-center justify-between mb-4 w-full">
                <div class="flex items-center">

                </div>
                <a href="#"
                    class="text-xs text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Create
                    Account</a>
            </div>
            <button type="submit"
                class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Login</button>
        </form>
    </div>
</section>
@include('admin.base.end')