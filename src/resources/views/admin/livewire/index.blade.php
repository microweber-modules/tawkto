<div>

    <div class="d-flex justify-content-between">
        <div>
        <h2>{{_e('Tawk.to')}}</h2>
        <p>
            {{_e('Integrate Tawk.to chat on your website. Tawk.to is a free messaging app that lets you monitor and chat with visitors on your website. It is a convenient way to provide support and increase sales.')}}
        </p>
        </div>
    </div>

    <div class="mb-3 mt-4 gap-3">


        <div class="card mt-4">
            <div class="card-body mb-4">
                <div>
                    <small class="live-edit-label"><?php _e("Direct Chat Link"); ?></small>
                    <livewire:microweber-option::text optionKey="direct_chat_link" optionGroup="tawkto" module="tawkto"  />
                </div>
            </div>
        </div>


    </div>

</div>
