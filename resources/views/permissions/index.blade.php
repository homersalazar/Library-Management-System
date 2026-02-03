@extends('layouts.app')

@section('content')
    <div class="flex flex-col gap-1">
        <h1 class="font-semibold text-lg text-green-900">Permissions</h1>
        <div id="permission_tree"></div>
    </div>
    {{-- create button --}}
    <input type="hidden" data-modal-target="createModal" data-modal-toggle="createModal" />
    <input type="hidden" data-modal-target="updateModal" data-modal-toggle="updateModal" />
    <script>
        $(function () {
            $('#permission_tree').jstree({
                'core': {
                    'data': @json($formattedData),
                },
                "plugins": ["state", "contextmenu", "sort"],
                'contextmenu': {
                    items: function (node) {
                        var menu = {};
                            menu.add = {
                                label: 'Create',
                                action: function () {
                                    var create_button = document.querySelector('[data-modal-target="createModal"]');
                                    if (create_button) {
                                        create_button.click();
                                        document.querySelector('#addForm input[name="parent_id"]').value = node.id;
                                    }
                                }
                            };

                            menu.edit = {
                                label: 'Rename',
                                action: function () {
                                    var rename_button = document.querySelector('[data-modal-target="updateModal"]');
                                    if (rename_button) {
                                        rename_button.click();
                                        document.querySelector('#editForm input[name="permission_name"]').value = node.text;
                                        $("#editForm").off("submit").on("submit", function (e) {
                                            e.preventDefault();
                                            const formData = $(this).serialize();
                                            $.ajax({
                                                // url: `/permissions/update_permission/${node.id}`,
                                                method: "POST",
                                                data: formData,
                                                success: function (data) {
                                                    Swal.fire({
                                                        title: 'Success!',
                                                        text: data.message,
                                                        icon: 'success',
                                                        showConfirmButton: false,
                                                        timer: 3000
                                                    }).then(() => {
                                                        window.location.reload();
                                                    });
                                                },
                                                error: function (xhr) {
                                                    let message = 'An error occurred while updating the event.';
                                                    if (xhr.responseJSON && xhr.responseJSON.message) {
                                                        message = xhr.responseJSON.message;
                                                    }
                                                    else if (xhr.responseText) {
                                                        try {
                                                            let parsed = JSON.parse(xhr.responseText);
                                                            if (parsed.message) {
                                                                message = parsed.message;
                                                            }
                                                        } catch (e) {
                                                            message = xhr.responseText;
                                                        }
                                                    }
                                                    Swal.fire({
                                                        title: "Info!",
                                                        text: message,
                                                        icon: "info",
                                                        showConfirmButton: false,
                                                        timer: 4000
                                                    });
                                                }
                                            });
                                        });
                                    }
                                }
                            };
                        return menu;
                    }
                }
            });
        });
    </script>
@endsection
