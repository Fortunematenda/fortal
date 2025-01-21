<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Help') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <div class="p-6 sm:p-12 bg-white shadow sm:rounded-lg">
                <h3 class="text-lg font-semibold mb-4">How can we assist you?</h3>
                <p class="mb-4">
                    If you have any questions or need assistance, please fill out the form below. 
                    Our support team will get back to you as soon as possible.
                </p>

                <!-- Topic Dropdown -->
                <div class="mb-4">
                    <label for="topic" class="block text-gray-700 font-medium">Select a Topic</label>
                    <select id="topic" name="topic" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring focus:ring-blue-200 focus:ring-opacity-50" required>
                        <option value="" disabled selected>Select a topic</option>
                        <option value="account">Account Issues</option>
                        <option value="billing">Billing & Payments</option>
                        <option value="technical">Technical Support</option>
                        <option value="feedback">Feedback & Suggestions</option>
                    </select>
                </div>

                <!-- Message Input -->
                <x-text-input id="msg" name="msg" type="text" class="mt-1 block w-full" placeholder="Type your message here..." required autofocus autocomplete="msg" />
                
                <x-primary-button class="mt-4">{{ __('Submit') }}</x-primary-button>
    
                <div class="mt-4 text-sm text-gray-600">
                  
                    <ul class="list-disc ml-5">
                        <li>Email: <a href="mailto:support@fortai.com" class="text-blue-600 hover:underline">support@fortai.com</a></li>
                        <li>Phone: <a href="tel:+27612685933" class="text-blue-600 hover:underline">+27 21 456 7890</a></li>
                    </ul>
                </div>
                
                
            </div>
        </div>
    </div>
</x-app-layout>
