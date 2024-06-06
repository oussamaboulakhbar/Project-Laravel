<section class="bg-white rounded-md shadow-md">
    <div class=" px-4 py-8 mx-auto">
        <h2 class="mb-4 text-xl font-bold">Ajouter un Fournisseur</h2>
        <form>
            <div class="grid gap-4 mb-4 sm:grid-cols-2 sm:gap-6 sm:mb-5">
                <div class="w-full">
                    <label htmlFor="code" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Code</label>
                    <input type="text" name="code" id="code" class=" bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                    />
                </div>
                <div class="w-full">
                    <label htmlFor="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
                    <input type="text" name="nom" id="nom" class="bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                    />
                </div>
                <div class="w-full">
                    <label htmlFor="adresse" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse</label>
                    <input type="text" name="adresse" id="adresse" class="bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                    />
                </div>
                <div class="w-full">
                    <label htmlFor="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Adresse Email</label>
                    <input type="text" name="email" id="email" class="bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5"
                    />
                </div>
                <div>
                    <label htmlFor="ville" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Ville</label>
                    <select id="ville" class="bg-[#FFFFff] border border-gray-300 text-gray-900 text-sm font-medium rounded-md focus:shadow-md focus:border-primary-600 hover:border-primary-500 hover:shadow-md block w-full p-2.5">
                        <option selected="">Homme</option>
                        <option value="TV">Femme</option>
                    </select>
                </div>
                <div>
                    <label htmlFor="type_dachat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type d'achat</label>
                    <select id="type_dachat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                        <option selected="">Admin</option>
                        <option value="sousAdmin">Sous-Admin</option>
                    </select>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <Link to="/Fournisseurs" type="submit" class="text-white bg-green-600 hover:bg-green-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Enregistrer
                </Link>
                <button type="button" onClick={() => setAlertModal(prev => !prev)} class="text-red-600 gap-2 inline-flex items-center hover:text-white border-2 border-red-600 hover:bg-red-600 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    Annuler
                </button>
            </div>
        </form>
    </div>
</section>
