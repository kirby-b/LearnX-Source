<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.history') }}" class="hover:text-purple-300">History:</a><br>
                        <a href="{{ route('page.world.history') }}" class="hover:text-purple-300">World History:</a><br>
                    </p>
                    <p class="text-lg font-sans m-4">
                        <a href="{{ route('page.century1.world') }}" class="hover:text-purple-300">1st Century</a><br>
                        <br>
                        <a href="{{ route('page.century2.world') }}" class="hover:text-purple-300">2nd Century</a><br>
                        <br>
                        <a href="{{ route('page.century3.world') }}" class="hover:text-purple-300">3rd Century</a><br>
                        <br>
                        <a href="{{ route('page.century4.world') }}" class="hover:text-purple-300">4th Century</a><br>
                        <br>
                        <a href="{{ route('page.century5.world') }}" class="hover:text-purple-300">5th Century</a><br>
                        <br>
                        <a href="{{ route('page.century6.world') }}" class="hover:text-purple-300">6th Century</a><br>
                        <br>
                        <a href="{{ route('page.century7.world') }}" class="hover:text-purple-300">7th Century</a><br>
                        <br>
                        <a href="{{ route('page.century8.world') }}" class="hover:text-purple-300">8th Century</a><br>
                        <br>
                        <a href="{{ route('page.century9.world') }}" class="hover:text-purple-300">9th Century</a><br>
                        <br>
                        <a href="{{ route('page.century10.world') }}" class="hover:text-purple-300">10th Century</a><br>
                        <br>
                        <a href="{{ route('page.century11.world') }}" class="hover:text-purple-300">11th Century</a><br>
                        <br>
                        <a href="{{ route('page.century12.world') }}" class="hover:text-purple-300">12th Century</a><br>
                        <br>
                        <a href="{{ route('page.century13.world') }}" class="hover:text-purple-300">13th Century</a><br>
                        <br>
                        <a href="{{ route('page.century14.world') }}" class="hover:text-purple-300">14th Century</a><br>
                        <br>
                        <a href="{{ route('page.century15.world') }}" class="hover:text-purple-300">15th Century</a><br>
                        <br>
                        <a href="{{ route('page.century16.world') }}" class="hover:text-purple-300">16th Century</a><br>
                        <br>
                        <a href="{{ route('page.century17.world') }}" class="hover:text-purple-300">17th Century</a><br>
                        <br>
                        <a href="{{ route('page.century18.world') }}" class="hover:text-purple-300">18th Century</a><br>
                        <br>
                        <a href="{{ route('page.century19.world') }}" class="hover:text-purple-300">19th Century</a><br>
                        <br>
                        <a href="{{ route('page.century20.world') }}" class="hover:text-purple-300">20th Century</a><br>
                        <br>
                        <a href="{{ route('page.century21.world') }}" class="hover:text-purple-300">21st Century</a><br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <div class="font-Preahvihear items-center text-2xl">
                            <b>21st Century</b>
                        </div>
                        <br>
                        2001: (9/11) Attacks.<br>
                        2005: Hurricane Katrina.<br>
                        2008: Election of Barack Obama as U.S. President.<br>
                        2008: Global Financial Crisis.<br>
                        2010: Passage of the Affordable Care Act (ACA).<br>
                        2013: Boston Marathon Bombing.<br>
                        2015: Supreme Court's Decision on Same-Sex Marriage.<br>
                        2015: SpaceX Falcon 9's First Successful Landing.<br>
                        2016: Election of Donald Trump as U.S. President.<br>
                        2019-2022: COVID-19 Pandemic.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>