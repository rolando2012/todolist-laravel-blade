import TomSelect from "tom-select";

document.addEventListener("DOMContentLoaded", action_tom);

function action_tom(){
    document.querySelectorAll(".tom-select").forEach((el) => {
        el.classList.remove('form-select');
        new TomSelect(el, {
            plugins: ['remove_button'],
            create: false,
            persist: false,
            hideSelected: true,
            closeAfterSelect: false,
            maxOptions: 100,
            searchField: ['text'],
            placeholder: 'Buscar etiquetas...',
            render: {
                no_results: function(data, escape) {
                    return `<div class="no-results p-2 text-muted small">
                                No se encontraron etiquetas
                            </div>`; 
                }
            }
        });
    });
}
