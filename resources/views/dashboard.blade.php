<x-app-layout>
    <x-slot name="header">

        <x-header>
            {{ __('Dashboard') }}
        </x-header>


    </x-slot>

    <x-container>
        <x-form post :action="route('question.store')">

            <x-textarea label="Question" name="question" />

            <x-button.primary>Save</x-button.primary>
            <x-button.reset>Cancel</x-button.reset>

        </x-form>

        <hr class="border-gray-700 border-dashed my-4">

        {{--listagem--}}

        <div class="dark:text-gray-400 uppercase font-bold mb-1">Question List</div>


        <div class="dark:text-gray-400 space-y-4">
            @foreach ($questions as $item)
                <div>
                    <x-question :question="$item" />
                </div>
            @endforeach
        </div>
    </x-container>

</x-app-layout>
