 @csrf
 <input type="email" name='email' value='{{ old('email') }}' placeholder="{{ __('messages.Email') }}" required
     class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
 <input type="password" name='password' value='{{ old('password') }}' placeholder="{{ __('messages.Password') }}" required
     class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
 <button type="submit"
     class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700 transition">{{ __('messages.Login') }}</button>
