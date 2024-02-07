<div x-data="{
showMainEditTab: 'mainSettings'
}">

    <?php
    $moduleTemplates = module_templates($moduleType);
    ?>

    @if($moduleTemplates && count($moduleTemplates) >  1)
        <div class="d-flex justify-content-between align-items-center collapseNav-initialized form-control-live-edit-label-wrapper">
            <div class="d-flex flex-wrap gap-md-4 gap-3">
                <button x-on:click="showMainEditTab = 'mainSettings'"
                        :class="{ 'active': showMainEditTab == 'mainSettings' }"
                        class="btn btn-link text-decoration-none mw-admin-action-links mw-adm-liveedit-tabs active">
                    @lang('Main settings')
                </button>
                <button x-on:click="showMainEditTab = 'design'" :class="{ 'active': showMainEditTab == 'design' }"
                        class="btn btn-link text-decoration-none mw-admin-action-links mw-adm-liveedit-tabs">
                    @lang('Design')
                </button>
            </div>
        </div>
    @endif

        <div x-show="showMainEditTab=='mainSettings'">

            @php
                $style = 'default';
                $getStyle = get_option('style', $moduleId);
                if ($getStyle == 'popup_text') {
                    $style = 'popup_text';
                }
            @endphp


            <div x-data="{'style': '{{$style}}'}">

            <div>
                <label class="live-edit-label"><?php _e("Calendly Link"); ?></label>
                <livewire:microweber-option::text optionKey="link" :optionGroup="$moduleId" :module="$moduleType"  />
            </div>

            <div class="col-md-6">
                <label class="live-edit-label"><?php _e("Calendly Style"); ?></label>
                @php
                    $radioOptions = [
                        'default' => 'Inline Embed',
                        'popup_text' => 'Popup Text',
                    ];
                @endphp
                <livewire:microweber-option::dropdown :dropdownOptions="$radioOptions" optionKey="style" :optionGroup="$moduleId" :module="$moduleType"  />
            </div>

             <div class="p-2">
                 <div class="mt-2">
                     <livewire:microweber-option::color-picker label="Background Color" optionKey="background_color" :optionGroup="$moduleId" :module="$moduleType"  />
                 </div>

                 <div class="mt-2">
                     <livewire:microweber-option::color-picker label="Text Color" optionKey="text_color" :optionGroup="$moduleId" :module="$moduleType"  />
                 </div>
                 <div class="mt-2">
                     <livewire:microweber-option::color-picker label="Primary Color" optionKey="primary_color" :optionGroup="$moduleId" :module="$moduleType"  />
                 </div>
             </div>

            <div @mw-option-saved.window="function() {
                    if ($event.detail.optionKey == 'style') {
                        style = $event.detail.optionValue;
                    }

                    if ($event.detail.optionGroup === '{{$moduleId}}') {
                            mw.reload_module_everywhere('{{$moduleType}}', function () {
                            mw.top().app.liveEdit.handles.get('module').position(mw.top().app.liveEdit.handles.get('module').getTarget());
                    });
                }
             }">
            </div>

           <div x-show="style == 'popup_text'">
               <div>
                   <label class="live-edit-label"><?php _e("Button Text"); ?></label>
                   <livewire:microweber-option::text optionKey="button_text" :optionGroup="$moduleId" :module="$moduleType"  />
               </div>

               <div class="p-2">
                   <div class="mt-2">
                       <livewire:microweber-module-btn::template-settings-bootstrap :moduleId="$moduleId" :moduleType="$moduleType" />
                   </div>

               </div>
           </div>

        </div>
        </div>

    @if($moduleTemplates && count($moduleTemplates) >  1)

        <div x-show="showMainEditTab=='design'" x-transition:enter="tab-pane-slide-right-active">

            <div>
                <livewire:microweber-live-edit::module-select-template :moduleId="$moduleId" :moduleType="$moduleType"/>
            </div>
        </div>

    @endif
</div>
