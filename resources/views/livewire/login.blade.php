<div class="w-2/8 h-108 relative z-30 border border-white/50 shadow-[-10px_0px_10px_0px_rgba(0,0,0,0.3)] bg-white/25 rounded-xl mx-auto my-6 grid grid-rows-5 justify-center ">

<div class="w-full h-108 absolute pointer-events-none blur-3xl z-10 border border-white/50 mt-12  bg-white/25 rounded-xl mx-auto  ">
</div>
    <h1 class="text-3xl row-span-1 mt-1 text-center text-white/80 italic font-medium font-[C059] font-[DejaVu Serif]">LOGIN</h1>
    <form class="row-span-4 grid grid-row-4 mt-8 gap-y-6" wire:submit="User_login">
        @csrf
    @if (session('error'))
        <p class="text-red-500 text-xs italic content-box text-center">{{ session('error') }}</p>
    @endif
        <div class="row-span-1">
            <input class="bg-white/40 ml-3 px-5 py-2  text-md rounded-md backdrop-blur" wire:model="username" value="{{ old('email') }}" type="text" name="username" placeholder="USERNAME">
        </div>

        @error('username')
        <p class="text-red-500 text-xs italic content-box">{{ $message }}</p>
        @enderror

        <div class="row-span-1">
            <input class="bg-white/40 ml-3 px-5  py-2 text-md rounded-md backdrop-blur-lg" wire:model="password" value="{{ old('password') }}" type="{{$type}}" name="password" placeholder="PASSWORD">
            <img class="w-5 inline relative right-9 " src="{{ asset($eye_path) }}" wire:click="change_eye" alt="">
        </div>
        @error('password')
        <p class="text-red-500 text-xs italic content-box">{{ $message }}</p>
        @enderror

        <div class="row-span-2 flex flex-col justify-start">
            <button class="bg-cyan-400 rounded-lg p-2.5 font-[C059] text-xl box-content text-white hover:bg-white hover:text-cyan-400" type="submit">Login</button>

            <span class="text-center text-white">Not account?? <a href="{{ route('Signup') }}" class="text-[#ff0dae] ml-2 hover:text-[#00000075] underline underline-offset-2">Sign Up First</a></span>
        </div>
    </form>
</div>

