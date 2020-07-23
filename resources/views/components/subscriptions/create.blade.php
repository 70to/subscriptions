<form class="lg:max-w-6xl md:max-w-5xl">
    <div>
        <div>
            <div>
{{--                <h3 class="text-lg leading-6 font-medium text-gray-900 font-bold">--}}
{{--                    サービスを追加する--}}
{{--                </h3>--}}
            </div>
            <div class="mt-6">
                <div class="mt-6">
                    <label for="username" class="block text-base font-medium leading-5 text-gray-700">
                        サービス名
                    </label>
                    <div>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input id="name"
                                   class="form-input block w-full py-4 pl-7 pr-12 sm:text-lg sm:leading-5">
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <label for="username" class="block text-base font-medium leading-5 text-gray-700">
                        支払い周期
                    </label>
                    <select id="location"
                            class="mt-1 py-4 form-select block w-full pl-3 pr-10 py-2 text-base leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                        <option>月に1回</option>
                        <option selected>年に1回</option>
                    </select>
                </div>
                <div class="mt-6">
                    <label for="username" class="block text-base font-medium leading-5 text-gray-700">
                        料金
                    </label>
                    <div>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                      <span class="text-gray-500 sm:text-lg sm:leading-5">
                                        ¥
                                      </span>
                            </div>
                            <input id="price"
                                   class="form-input block w-full py-4 pl-7 pr-12 sm:text-lg sm:leading-5"
                                   placeholder="1000">
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                        次回支払日
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input type="date" id="date" class="form-input py-4 block w-full sm:text-sm sm:leading-5"
                               placeholder="you@example.com">
                    </div>
                </div>

                <div class="mt-6">
                    <label for="about" class="block text-sm font-medium leading-5 text-gray-700">
                        メモ
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                                <textarea id="about" rows="3"
                                          class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        追加する
                    </button>
                </div>

            </div>
        </div>
    </div>
</form>
