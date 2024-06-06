<!-- resources/views/matches/create.blade.php -->
<x-master>
    <section class="bg-white rounded-md shadow-md">
        <div class=" px-4 py-8 mx-auto">
            <h1 class="text-2xl font-bold mb-6">Create Report</h1>
            <form action="{{ route('matches.store') }}" method="POST">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                            for="city">City:</label>
                        <select name="city" required
                            class="bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5">
                            <option selected="">.......</option>
                            <option value="Agadir">Agadir</option>
                            <option value="Tiznit">Tiznit</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category:</label>
                        <select name="category"
                            class="bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5">
                            <option selected="">.......</option>
                            <option value="القسم الشرفي الممتاز">القسم الشرفي الممتاز</option>
                            <option value="القسم الشـــرفي الأول">القسم الشـــرفي الأول</option>
                            <option value="القسم الشرفي الثاني">القسم الشرفي الثاني</option>
                            <option value="الشبـــــــــــــان">الشبـــــــــــــان</option>
                            <option value="الفتيـــــــــــان">الفتيـــــــــــان</option>
                            <option value="الصغـــــــــــــار">الصغـــــــــــــار</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Competition:</label>
                        <select name="competition"
                            class="bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5">
                            <option selected="">.......</option>
                            <option value="البطـــــــــولة">البطـــــــــولة</option>
                            <option value="دوري أكشــــــوظ">دوري أكشــــــوظ</option>
                            <option value="كأس ســـــــــوس">كأس ســـــــــوس</option>
                            <option value="كأس العــــــرش">كأس العــــــرش</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Round:</label>
                        <input
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            type="number" placeholder="enter round number" name="round" required>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date:</label>
                        <input
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            type="date" id="date_match" name="date_match" required>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time of the Match:</label>
                        <input
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            type="time" id="date_match" name="time_match" required>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Visiting Team:</label>
                        <select name="visiting_team"
                            class="bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5">
                            <option selected="">.......</option>
                            <option value="RCA">RCA</option>
                            <option value="HUSA">HUSA</option>
                            <option value="WAC">WAC</option>
                            <option value="MAS">MAS</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Local Team:</label>
                        <select name="local_team"
                            class="bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5">
                            <option selected="">.......</option>
                            <option value="RCA">RCA</option>
                            <option value="HUSA">HUSA</option>
                            <option value="WAC">WAC</option>
                            <option value="MAS">MAS</option>
                        </select>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Goals Visiting Team:</label>
                        <input
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            type="number" placeholder="enter result final" name="goal_V">
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Goals Local Team:</label>
                        <input
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            type="number" placeholder="enter result final" name="goal_L">
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scorer Visiting Team:</label>
                        <textarea
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            name="scorer_V" placeholder="example: Messi 33' ..."></textarea>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scorer Local Team:</label>
                        <textarea
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            name="scorer_L" placeholder="example: Messi 33' ..."></textarea>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warning Visiting
                            Team:</label>
                        <textarea
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            name="warning_V"></textarea>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Warning Local
                            Team:</label>
                        <textarea
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            name="warning_L"></textarea>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expulsions Visiting
                            Team:</label>
                        <textarea
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            name="expulsions_V"></textarea>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Expulsions Local
                            Team:</label>
                        <textarea
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            name="expulsions_L"></textarea>
                    </div>

                    <!-- Additional Fields -->
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Changed Players
                            Visiting Team:</label>
                        <textarea
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            name="changed_players_V"></textarea>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Changed Players
                            Local Team: </label>
                        <textarea
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            name="changed_players_L"></textarea>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Referee 1:</label>
                        <input
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            type="text" name="referee_1" required>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Referee 2:</label>
                        <input
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            type="text" name="referee_2" required>
                    </div>
                    <div class="w-full">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Referee 3:</label>
                        <input
                            class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                            type="text" name="referee_3" required>
                    </div>
                    <div>
                        <input type="hidden" name="referee_id" value="{{ Auth::user()->id }}">
                    </div>
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Save Match</button>
                </div>
            </form>
        </div>
    </section>
</x-master>
