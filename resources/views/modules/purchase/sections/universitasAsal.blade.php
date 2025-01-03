<div class="w-full p-6 mx-auto max-[769px]:max-w-[600px] max-xl:max-w-[800px] max-w-[1228px] bg-white rounded-lg shadow-[0px_4px_10px_10px_rgba(0,0,0,0.2)]">
    <form id="universityForm">
        @csrf
        <div class="mb-6">
            <label class="text-4xl max-md:text-xl max-xl:text-3xl font-bold inline-flex items-center">
                Universitas Asal 
                <span class="text-red-500 ml-1">*</span>
            </label>
        </div>
        
        <div class="space-y- max-md:space-y-4">
            <label class="flex space-x-2 items-center md:p-2 cursor-pointer">
                <input type="radio" data-university name="university" value="Universitas Airlangga (UNAIR)" class="w-[30px] h-[30px] max-xl:size-7">
                <span class="text-2xl max-md:text-lg max-xl:text-xl">Universitas Airlangga (UNAIR)</span>
            </label>
            
            <label class="flex items-center space-x-2 md:p-2 cursor-pointer">
                <input type="radio" data-university name="university" value="Universitas Gadjah Mada (UGM)" class="w-[30px] h-[30px] max-xl:size-7">
                <span class="text-2xl max-md:text-lg max-xl:text-xl">Universitas Gadjah Mada (UGM)</span>
            </label>
        </div>
    </form>
</div>
