<div class="p-6 mx-auto w-full bg-white rounded-lg shadow-xl border-2 border-gray-100">
    <form id="universityForm">
        @csrf
        <div class="mb-6">
            <label class="text-xl font-semibold inline-flex items-center">
                Universitas Asal 
                <span class="text-red-500 ml-1">*</span>
            </label>
        </div>
        
        <div class="space-y- max-md:space-y-4">
            <label class="flex space-x-2 items-center md:p-2 cursor-pointer">
                <input type="radio" data-university name="university" value="Universitas Airlangga (UNAIR)" class="radio">
                <span class="text-sm">Universitas Airlangga (UNAIR)</span>
            </label>
            
            <label class="flex items-center space-x-2 md:p-2 cursor-pointer">
                <input type="radio" data-university name="university" value="Universitas Gadjah Mada (UGM)" class="radio">
                <span class="text-sm">Universitas Gadjah Mada (UGM)</span>
            </label>
        </div>
    </form>
</div>
