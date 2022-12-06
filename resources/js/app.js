import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


document.querySelectorAll('.tableSearch').forEach(table => {
    table.addEventListener('keydown', e => {
        const tableData = e.target.parentElement.parentElement.parentElement.querySelectorAll('tbody tr');
        const re = new RegExp(e.target.value, 'i');
    
        tableData.forEach(data => {
            let str = '';
            data.querySelectorAll('td').forEach(item => {
                str += item.textContent;
            });
            
            const display = re.exec(str);
            
            if(display){
                data.style.display = '';
            }else{
                data.style.display = 'none';
            }
        });
    }) 
})