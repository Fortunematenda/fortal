<section class="p-4 bg-white rounded-lg">

 


    <form method="post" action="{{ route('update_services') }}" class="mt-6 space-y-6">
        @csrf

        <div>
        <x-input-label for="services" :value="__('Select Services')" />
     
        <select class="js-example-basic-multiple mt-1 block w-full" name="services[]" multiple="multiple" style="cursor: default;padding-left: 20px !important;padding-right: 2px ;">
        @foreach($services as $service)
    <option @if(in_array($service, $latest_services)) selected @endif>{{ $service }}</option>
@endforeach
</select>

        </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>
        </div>
    </form>
</section>

