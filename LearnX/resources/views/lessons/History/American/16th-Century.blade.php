<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.history') }}" class="hover:text-purple-300">History:</a><br>
                        <a href="{{ route('page.american.history') }}" class="hover:text-purple-300">American History:</a><br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <br>
                        <a href="{{ route('page.century15.america') }}" class="hover:text-purple-300">15th Century</a><br>
                        <br>
                        <a href="{{ route('page.century16.america') }}" class="hover:text-purple-300">16th Century</a><br>
                        <br>
                        <a href="{{ route('page.century17.america') }}" class="hover:text-purple-300">17th Century</a><br>
                        <br>
                        <a href="{{ route('page.century18.america') }}" class="hover:text-purple-300">18th Century</a><br>
                        <br>
                        <a href="{{ route('page.century19.america') }}" class="hover:text-purple-300">19th Century</a><br>
                        <br>
                        <a href="{{ route('page.century20.america') }}" class="hover:text-purple-300">20th Century</a><br>
                        <br>
                        <a href="{{ route('page.century21.america') }}" class="hover:text-purple-300">21st Century</a><br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        16th Century:<br>
                        <br>
                        1501: The first African slaves are brought to the Americas by the Spanish.<br>
                        1503: The encomienda system is established.<br>
                        1513: Juan Ponce de León explores Florida, the first known European expedition to the area.<br>
                        1519-1521: Hernán Cortés conquers the Aztec Empire in Mexico.<br>
                        1533: Francisco Pizarro conquers the Inca Empire in Peru.<br>
                        1540-1542: Francisco Vázquez de Coronado explores the American Southwest.<br>
                        1565: St. Augustine, Florida, is established, the oldest continuously inhabited European-established settlement in the continental United States.<br>
                        1585: Roanoke Colony, the first English attempt at settlement in the Americas, is founded.<br>
                        1588: The Spanish Armada is defeated by the English navy.<br>
                        1590: The Roanoke Colony mysteriously disappears.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>