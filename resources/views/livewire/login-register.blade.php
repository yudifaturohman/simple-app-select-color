<div>
    @if (session()->has('error'))
        <span class="text-red-500">
            {{ session('error') }}
        </span>
    @endif
    @if (session()->has('success'))
    <span class="text-green-500">
        {{ session('success') }}
    </span>
    @endif
    @if($registerForm)
    <div class="w-full mt-16 md:mt-0 md:w-full">
        <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
            <h3 class="mb-6 text-2xl font-medium text-center">Sign up</h3>
            <input type="text" wire:model="name" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Full Name">
            @error('name') <span class="text-red-500">{{ $message }}</span> @enderror
            <input type="email" wire:model="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Email Address">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            <input type="password" wire:model="password" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Password">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
            <div class="block">
                <button class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg" wire:click.prevent="registerStore">Register</button>
            </div>
            <p class="w-full mt-4 text-sm text-center text-gray-500">Already account? <a href="#_" wire:click.prevent="register" class="text-blue-500 underline">Login here</a></p>
        </div>
    </div>
    @else
    <form>
    <div class="w-full mt-16 md:mt-0 md:w-full">
        <div class="relative z-10 h-auto p-8 py-10 overflow-hidden bg-white border-b-2 border-gray-300 rounded-lg shadow-2xl px-7">
            <h3 class="mb-6 text-2xl font-medium text-center">Sign in to your Account</h3>
            <input type="email" wire:model="email" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Email Address">
            @error('email') <span class="text-red-500">{{ $message }}</span> @enderror
            <input type="password" wire:model="password" class="block w-full px-4 py-3 mb-4 border border-2 border-transparent border-gray-200 rounded-lg focus:ring focus:ring-blue-500 focus:outline-none" placeholder="Password">
            @error('password') <span class="text-red-500">{{ $message }}</span> @enderror
            <div class="block">
                <button class="w-full px-3 py-4 font-medium text-white bg-blue-600 rounded-lg" wire:click.prevent="login">Login</button>
            </div>
            <p class="w-full mt-4 text-sm text-center text-gray-500">Don't have an account? <a href="#_" wire:click.prevent="register" class="text-blue-500 underline">Register here</a></p>
        </div>
    </div>
    </form>
    @endif
</div>