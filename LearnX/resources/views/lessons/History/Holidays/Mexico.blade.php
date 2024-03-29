<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.history') }}" class="hover:text-purple-300">History:</a><br>
                        <a href="{{ route('page.holidays') }}" class="hover:text-purple-300">Holidays Around The World:</a><br>
                    </p>
                    <p class="text-2xl font-sans m-4">
                        <br>
                        <a href="{{ route('page.china') }}" class="hover:text-purple-300">China</a><br>
                        <br>
                        <a href="{{ route('page.india') }}" class="hover:text-purple-300">India</a><br>
                        <br>
                        <a href="{{ route('page.usa') }}" class="hover:text-purple-300">United States</a><br>
                        <br>
                        <a href="{{ route('page.brazil') }}" class="hover:text-purple-300">Brazil</a><br>
                        <br>
                        <a href="{{ route('page.russia') }}" class="hover:text-purple-300">Russia</a><br>
                        <br>
                        <a href="{{ route('page.indonesia') }}" class="hover:text-purple-300">Indonesia</a><br>
                        <br>
                        <a href="{{ route('page.pakistan') }}" class="hover:text-purple-300">Pakistan</a><br>
                        <br>
                        <a href="{{ route('page.nigeria') }}" class="hover:text-purple-300">Nigeria</a><br>
                        <br>
                        <a href="{{ route('page.japan') }}" class="hover:text-purple-300">Japan</a><br>
                        <br>
                        <a href="{{ route('page.mexico') }}" class="hover:text-purple-300">Mexico</a><br>
                    </p>
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <b>HOLIDAYS</b>
                        </div>
                        <div class="font-Preahvihear items-center text-xl">
                            <b>Mexico</b>
                        </div>
                        <div class="flex flex-col"> 
                            <div class="font-sans">
                                <span class="font-semibold">Diwali:</span><br>Festival of Lights, celebrated in October or November.<br>
                                <br>
                                <span class="font-semibold">Holi:</span><br>Festival of Colors, celebrated in March.<br>
                                <br>
                                <span class="font-semibold">Independence Day:</span><br>Celebrated on August 15.<br>
                                <br>
                                <span class="font-semibold">Raksha Bandhan:</span><br>Celebrated in August, a festival celebrating the bond between brothers and sisters.<br>
                                <br>
                                <span class="font-semibold">Ganesh Chaturthi:</span><br> Celebrated in August or September in honor of Lord Ganesha.<br>
                                <br>
                            <div class="font-sans">
                                <span class="font-semibold">Durga Puja:</span><br>A major Hindu festival celebrated in October.<br>
                                <br>
                                <span class="font-semibold">Navaratri/Dussehra:</span><br>Celebrated in September or October, honoring the goddess Durga.<br>
                                <br>
                                <span class="font-semibold">Eid al-Fitr:</span><br>Celebrated at the end of Ramadan.<br>
                                <br>
                                <span class="font-semibold">Eid al-Adha:</span><br>Celebrated by Muslims, known as the "Festival of Sacrifice."<br>
                                <br>
                                <span class="font-semibold">Republic Day:</span><br>Celebrated on January 26.<br>
                            </div>
                        </div>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>