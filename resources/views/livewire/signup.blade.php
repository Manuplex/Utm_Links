
<div class="w-2/8 h-108 shadow-[-10px_0px_10px_0px_rgba(0,0,0,0.3)] bg-white/25 rounded-xl mx-auto my-6 grid grid-rows-6 justify-center ">
        <div class="w-full h-108 pointer-events-none absolute  blur-3xl z-10 border border-white/50  bg-white/25 rounded-xl mx-auto  ">
        </div>
    <h1 class="text-3xl row-span-1 text-center mt-1 text-white/80 italic font-medium font-[C059] font-[DejaVu Serif]">SIGN UP</h1>
    <form class="row-span-5 grid grid-row-5 mt-8 gap-y-6" action="" method="POST">
        @csrf
        <div class="row-span-1">
            <label>USERNAME</label>
            <input class="bg-white/40 ml-3 px-5 py-2  text-md rounded-md backdrop-blur" value="{{ old('username') }}"type="text" name="username">
        </div>

        @error('username')
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
        @enderror

        <div class="row-span-1">
            <label >EMAIL</label>
            <input class="bg-white/40 ml-12 px-5 py-2  text-md rounded-md backdrop-blur" type="text" value="{{ old('email') }}" name="email">
        </div>

        @error('email')
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
        @enderror

        <div class="row-span-1">
            <label>PASSWORD</label>
            <input class="bg-white/40 ml-3 px-5  py-2 text-md rounded-md backdrop-blur-lg" value="{{ old('password') }}"type="password" name="password">
        </div>

        @error('password')
        <p class="text-red-500 text-xs italic mt-2">{{ $message }}</p>
        @enderror

        <div class="row-span-2 flex flex-col justify-start">
            <button class="bg-cyan-400 rounded-lg p-2.5 font-[C059] text-xl box-content text-white hover:bg-white hover:text-cyan-400" type="submit">Login</button>

            <span class="text-center text-white">Already an account?? <a href="#1.html" class="text-[#ff0dae] ml-2 hover:text-[#00000075]">Login now</a></span>
        </div>
    </form>
</div>

