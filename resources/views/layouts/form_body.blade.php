 @csrf
 <input type="email" name='email' value='{{ old('email') }}' placeholder="Email" required
     class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
 <input type="password" name='password' value='{{ old('password') }}' placeholder="Password" required
     class="w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-red-500">
 <button type="submit" class="w-full bg-red-600 text-white py-2 rounded hover:bg-red-700 transition">Login</button>
