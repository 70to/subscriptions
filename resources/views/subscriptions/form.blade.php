<form class="lg:max-w-6xl md:max-w-5xl" action="{{route('subscriptions.store')}}" method="post">
    @csrf
    <div>
        <div>
            <div class="mt-6">
                <div class="mt-6">
                    <label for="service" class="block text-sm font-medium leading-5 text-gray-700">
                        サービス名
                    </label>
                    <div>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="hidden" name="service_id" value="{{$service_id}}">
                            <input name="name" id="name"
                                   class="form-input block w-full py-4 pl-5 pr-10 sm:text-lg sm:leading-5" value="{{$service ?? ''}}">
                        </div>
                    </div>
                </div>
                <div class="mt-6">
                    <label for="cycle" class="block text-sm font-medium leading-5 text-gray-700">
                        支払い周期
                    </label>
                    <select id="location" name="cycle_id"
                            class="mt-1 py-4 form-select block w-full pl-3 pr-10 py-2 text-lg leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
                        @foreach ($cycles as $key => $cycle)
                            <option value="{{$key}}">{{$cycle['label']}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-6">
                    <label for="price" class="block text-sm font-medium leading-5 text-gray-700">
                        料金
                    </label>
                    <div>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                      <span class="text-gray-500 sm:text-lg sm:leading-5">
                                        ¥
                                      </span>
                            </div>
                            <input name="price" id="price"
                                   class="form-input block w-full py-4 pl-7 pr-12 sm:text-lg sm:leading-5"
                                   placeholder="1000">
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <label for="next_bill" class="block text-sm font-medium leading-5 text-gray-700">
                        次回支払日
                    </label>
                    <div class="mt-1 relative rounded-md shadow-sm">
                        <input name="next_bill" type="date" id="date" class="form-input py-4 block w-full sm:text-sm sm:leading-5"
                               placeholder="you@example.com">
                    </div>
                </div>

                <div class="mt-6">
                    <label for="memo" class="block text-sm font-medium leading-5 text-gray-700">
                        メモ
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                                <textarea name="memo" id="memo" rows="5"
                                          class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5"></textarea>
                    </div>
                </div>
                <div class="text-center mt-6">
                    <button type="submit"
                            class="inline-flex items-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">
                        追加する
                    </button>
                </div>

            </div>
        </div>
    </div>
</form>
