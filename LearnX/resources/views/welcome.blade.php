<x-partials.layout>
    <div class="bg-gray-100 py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-center items-center md:space-x-6">
                <!-- Image Section -->
                <div class="md:w-1/2 p-4">
                    <img src="/Images/Teacher-Online-With-Student.jpg" alt="Teacher Online With Student"
                        class="max-w-full h-auto rounded-lg shadow-lg">
                </div>

                <!-- Text Section -->
                <div class="md:w-1/2 p-4 bg-white border-2 border-gray-300 rounded-lg shadow-lg">
                    <p class="text-xl font-sans m-4">
                        LearnX, a place for students K-12 to strive and grow through their educational learning.
                        We strive to make every year count as your students grow through this program. At LearnX,
                        we take it upon ourselves to better our platform for students and for you. We teach kids
                        their 123's, all the way up to their f(x) = 3x^4 - 2x^3 + 5x^2 - 7x + 9 (The answer is
                        x≈0.5231),
                        from their ABC's to full essays on complex topics our world faces. For this upcoming 2024-2025
                        school year, we hope to help teachers engage with their students more than they could. We
                        also offer personalized learning sessions so students can get the most out of their learning.
                        We make our system user-friendly so you can get the most out of our site.
                        <br><br>
                        We hope you enjoy LearnX!
                        <a href="{{ route('signin') }}" class="text-blue-600 hover:text-blue-800">Click here</a>
                        to make a new account.
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-partials.layout>
