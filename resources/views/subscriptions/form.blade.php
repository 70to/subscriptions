@csrf
<div>
    <div>
        <div class="mt-6">
            @if (empty($service->name))
                <div class="mt-6">
                    <label for="service" class="block text-sm font-medium leading-5 text-gray-700">
                        サービス名
                    </label>
                    <div>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input type="hidden" name="service_id"
                                   value="{{$subscription->service->id ?? $service->id}}">
                            <input name="name" id="name"
                                   class="form-input block w-full py-4 pl-5 pr-10 sm:text-lg sm:leading-5"
                                   value="{{$subscription->name ?? $service->name}}">
                        </div>
                    </div>
                </div>
            @else
                <input type="hidden" name="name" id="name" class="form-input block w-full py-4 pl-5 pr-10 sm:text-lg sm:leading-5"
                       value="{{$subscription->name ?? $service->name}}">
                <input type="hidden" name="service_id" value="{{$subscription->service->id ?? $service->id}}">
            @endif
            <div class="mt-6">
                <label for="cycle" class="block text-sm font-medium leading-5 text-gray-700">
                    支払い周期
                </label>
                <select id="location" name="cycle_id"
                        class="mt-1 py-4 form-select block w-full pl-3 pr-10 py-2 text-lg leading-6 border-gray-300 focus:outline-none focus:shadow-outline-blue focus:border-blue-300">
                    @foreach ($cycles as $key => $cycle)
                        <option
                            value="{{$key}}" {{ $key == old('cycle_id', $subscription->cycle_id ?? '') ? 'selected' : '' }}>{{$cycle['label']}}</option>
                    @endforeach
                </select>
                @if ($errors->first('cycle_id'))
                    <p class="mt-2 text-sm text-red-600" id="email-error">{{$errors->first('cycle_id')}}</p>
                @endif
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
                               placeholder="1000" value="{{old('price', $subscription->price ?? '')}}">
                    </div>
                </div>
                @if ($errors->first('price'))
                    <p class="mt-2 text-sm text-red-600" id="email-error">{{$errors->first('price')}}</p>
                @endif
            </div>

            <div class="mt-6">
                <label for="first_bill" class="block text-sm font-medium leading-5 text-gray-700">
                    初回支払日
                </label>
                <div class="mt-1 relative rounded-md shadow-sm">
                    <input name="first_bill" type="date" id="date"
                           class="form-input py-4 block w-full sm:text-sm sm:leading-5"
                           placeholder="" value="{{old('first_bill', isset($subscription) ? $subscription->first_bill->format('Y-m-d') : '')}}">
                </div>
                @if ($errors->first('first_bill'))
                    <p class="mt-2 text-sm text-red-600" id="email-error">{{$errors->first('first_bill')}}</p>
                @endif
            </div>

            <div class="mt-6">
                <label for="memo" class="block text-sm font-medium leading-5 text-gray-700">
                    メモ
                </label>
                <div class="mt-1 rounded-md shadow-sm">
                                <textarea name="memo" id="memo" rows="5"
                                          class="form-textarea block w-full transition duration-150 ease-in-out sm:text-sm sm:leading-5">{{old('memo', $subscription->memo ?? '')}}</textarea>
                </div>
            </div>
            <div class="text-center mt-6">
                <button type="submit"
                        class="inline-flex items-center px-6 py-3 flex flex-row justify-center items-center bg-gray-500 text-white rounded-lg-xl focus:outline-none transition duration-150">
                    <p class="font-medium text-sm">{{$buttonText}}</p>
                </button>
            </div>
        </div>
    </div>
</div>
