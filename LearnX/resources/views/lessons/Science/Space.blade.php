<x-partials.UserLayout><!--Calls the layout to render top and bottom of page-->
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Links Section -->
                <div class="md:w-1/4 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg md:items-start md:self-start">
                    <p class="text-xl font-sans m-4">
                        Science:<br>
                    </p>
                    <p class="text-xl font-sans m-4">
                        <a href="{{ route('page.earth') }}" class="hover:text-purple-300">Earth</a><br>
                        <br>
                        <a href="{{ route('page.space') }}" class="hover:text-purple-300">Space</a><br>
                        <br>
                        <a href="{{ route('page.biology') }}" class="hover:text-purple-300">Biology</a><br>
                        <br>
                        <a href="{{ route('page.animals') }}" class="hover:text-purple-300">Animals</a><br>
                        <br>
                        <a href="{{ route('page.oceans') }}" class="hover:text-purple-300">Oceans</a><br>
                        <br>
                        <a href="{{ route('page.chemistry') }}" class="hover:text-purple-300">Chemistry</a><br>
                        <br>
                        <a href="{{ route('page.physics') }}" class="hover:text-purple-300">Physics</a><br>
                        <br>
                        <a href="{{ route('page.psycho') }}" class="hover:text-purple-300">Psycology</a><br>
                        <br>
                        <a href="{{ route('page.rocks') }}" class="hover:text-purple-300">Geology</a><br>
                        <br>
                        <a href="{{ route('page.genes') }}" class="hover:text-purple-300">Genetics</a><br>
                        <br>
                    </p>
                </div>
                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        <span class="font-black">Science:</span><br>
                        <span class="font-bold">Space:</span><br>
                        <span class="font-semibold">Observational Astronomy:</span> Involves the direct observation and study of celestial objects using telescopes and other instruments. It includes observing visible light, radio waves, infrared, ultraviolet, X-rays, and gamma rays emitted by objects in space.<br>
                        <br>
                        <span class="font-semibold">Planetary Science:</span> Focuses on the study of planets, moons, asteroids, comets, and other objects within our solar system. It explores their compositions, structures, surfaces, atmospheres, and potential for hosting life.<br>
                        <br>
                        <span class="font-semibold">Stellar Astronomy:</span> Examines stars, their life cycles, properties, classifications, and evolution. It explores how stars form, shine, and eventually transform into various types, such as white dwarfs, neutron stars, or black holes.<br>
                        <br>
                        <span class="font-semibold">Galactic Astronomy:</span> Studies galaxies, including their structures, compositions, movements, and interactions. It explores the formation and evolution of galaxies, from small dwarf galaxies to massive spiral and elliptical galaxies.<br>
                        <br>
                        <span class="font-semibold">Cosmology:</span> Investigates the origins, structure, evolution, and fate of the universe as a whole. It addresses questions about the Big Bang theory, the nature of dark matter and dark energy, the large-scale structure of the cosmos, and the possibility of other universes.<br>
                        <br>
                        <span class="font-semibold">Astrobiology:</span> Explores the possibility of life beyond Earth, examining the conditions required for life to exist on other planets or moons. It investigates extremophiles on Earth and searches for habitable environments in the universe.<br>
                        <br>
                        <span class="font-semibold">Space Exploration:</span> Involves sending probes, telescopes, and spacecraft to explore celestial objects, gather data, and conduct experiments. It includes missions to other planets, moons, asteroids, and the study of cosmic phenomena through space telescopes.<br>
                        <br>
                        <span class="font-semibold">High-Energy Astrophysics:</span> Focuses on the study of energetic phenomena in the universe, such as gamma-ray bursts, active galactic nuclei, and cosmic rays.<br>
                        <br>
                        <span class="font-semibold">Solar Physics:</span> Investigates the Sun and its behavior, including solar flares, sunspots, and the solar wind, to understand the processes that drive our star.<br>
                        <br>
                        <span class="font-semibold">Radio Astronomy:</span> Utilizes radio waves to study celestial objects, providing insights into phenomena such as pulsars, quasars, and cosmic microwave background radiation.<br>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.UserLayout>