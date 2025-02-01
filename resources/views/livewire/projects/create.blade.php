<div class="bg-[#10101E] divide-[#1E1E2C] divide-y p-[40px] rounded-[10px] border-[#1E1E2C] border w-3/5">
    <div class="text-[28px] text-white leading-9 pb-4">Anuncie seu projeto</div>

    <div class="flex flex-row gap-3 border-none">
        <div class="w-2/3 gap-2 flex flex-col">
            <label class="text-[14px] text-[#C3C3D1]">Título</label>
            <input wire:model="title" type="text" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Insira o título" />

            @error('title')
            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="w-1/3 gap-2 flex flex-col">
            <label class="text-[14px] text-[#C3C3D1]">Data limite</label>
            <input wire:model="date" type="date" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C] dark:[color-scheme:dark]" min="{{ date('Y-m-d') }}" />

            @error('date')
            <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>
    </div>

    <div class="gap-2 flex flex-col border-none py-4">
        <label class="text-[14px] text-[#C3C3D1]">Descrição</label>
        <textarea wire:model="description" type="text" rows="8" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Insira a descrição"></textarea>

        @error('description')
        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>

    <div class="gap-2 flex flex-col border-none pb-5">
        <label class="text-[14px] text-[#C3C3D1]">Tecnologia</label>
        <input wire:model="tech" type="text" class="w-full bg-[#1E1E2C] text-white p-2 focus:outline-none focus:ring-0 border border-[#1E1E2C]" placeholder="Insira a linguaguem de programação" />

        @error('tech')
        <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
        @enderror
    </div>

    <button class="bg-[#5354FD] text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px] hover:bg-[#1f20a6] transition duration-300 ease-in-out w-full" wire:click="create">
        Anunciar projeto
    </button>
</div>
