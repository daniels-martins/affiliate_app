<div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
    <div class="px-4 md:px-10 mx-auto w-full">
        <!-- Card stats -->
        {{-- for the authenticated user --}}
        <div class="flex flex-wrap">
            <x-information-card :sms="count(
                auth()
                    ->user()
                    ->getDownlines() ?? [],
            )" :title="'total downlines'" :change-in-value="''" :change-icon="'fa-arrow-up'"
                :duration="'all time'" :main-icon="'fa-chart-bar'" :main-icon-bg="'bg-red-500'" />

            <x-information-card :sms="count(
                auth()
                    ->user()
                    ->getDownlinesCreatedIn() ?? [],
            )" :title="'new downlines'" :change-in-value="''" :change-icon="'fa-arrow-up'"
                :duration="'today'" :main-icon="'fas fa-chart-pie'" :main-icon-bg="'bg-red-500'" />

            <x-information-card :sms="count(
                auth()
                    ->user()
                    ->getDownlinesCreatedIn('week') ?? [],
            )" :title="'new downlines'" :change-in-value="''" :change-icon="'fa-arrow-up'"
                :duration="'week'" :main-icon="'fas fa-users'" :main-icon-bg="'bg-red-500'" />

            <x-information-card :sms="count(
                auth()
                    ->user()
                    ->getDownlinesCreatedIn('this month') ?? [],
            )" :title="'new downlines'" :change-in-value="''" :change-icon="'fa-arrow-up'"
                :duration="'month'" :main-icon="'fa-chart-bar'" :main-icon-bg="'bg-red-500'" />
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
            </div>
        </div>

        @if (isset($reqUser) and $reqUser->id !== auth()->user()->id)
            {{-- for requested user --}}
            <div class="flex flex-wrap mt-5">
                <x-information-card-v2 :sms="count($reqUser->getDownlines() ?? [])" :title="'total downlines'" 
                  :change-in-value="''" :change-icon="'fa-arrow-up text-white'"
                    :duration="'all time'" :main-icon="'fa-chart-bar'" :main-icon-bg="'bg-red-500'" />

                <x-information-card-v2 :sms="count($reqUser->getDownlinesCreatedIn() ?? [])" :title="'new downlines'" :change-in-value="''" :change-icon="'fa-arrow-up'"
                    :duration="'today'" :main-icon="'fas fa-chart-pie'" :main-icon-bg="'bg-red-500'" />

                <x-information-card-v2 :sms="count($reqUser->getDownlinesCreatedIn('week') ?? [])" :title="'new downlines'" :change-in-value="''" :change-icon="'fa-arrow-up'"
                    :duration="'week'" :main-icon="'fas fa-users'" :main-icon-bg="'bg-red-500'" />

                <x-information-card-v2 :sms="count($reqUser->getDownlinesCreatedIn('this month') ?? [])" :title="'new downlines'" :change-in-value="''" :change-icon="'fa-arrow-up'"
                    :duration="'month'" :main-icon="'fa-chart-bar'" :main-icon-bg="'bg-red-500'" />
                <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
                </div>
            </div>
        @endif
    </div>
</div>
