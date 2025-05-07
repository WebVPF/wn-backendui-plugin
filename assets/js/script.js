/**
 * Тэг link с подключением стилей темы PrismJS в блоке <head>
 *
 * <link rel="stylesheet" href="/plugins/webvpf/backendui/assets/css/prism-tomorrow.css?WebVPF.BackendUI" data-docsui-prism="prism">
 */
let linkPrismCSS = document.querySelector('[data-docsui-prism="prism"]');

/**
 * Переключение тёмной/светлой темы PrismJS (подсветки кода)
 *
 * @param {string} prismThema Значения tomorrow|default
 */
function setThemePrismJS(prismThema) {
    let href = linkPrismCSS.getAttribute('href'),
        fileNameAtr = href.split('/')[href.split('/').length - 1].split('?'); // ['prism.css', 'WebVPF.BackendUI']

    let fileName = fileNameAtr[0];
    let version = fileNameAtr[1];

    linkPrismCSS.setAttribute('href', `/plugins/webvpf/backendui/assets/css/prism${ prismThema == 'default' ? '' : '-tomorrow' }.css?${ version }`)
}

/**
 * При загрузке устанавливает тёмную тему PrismJS, если тёмная тема
 */
if (localStorage.getItem('backendTheme') === 'dark') {
    setThemePrismJS('tomorrow')
}

document.addEventListener('modeDarkEnabled', () => setThemePrismJS('tomorrow'));

document.addEventListener('modeDarkDisabled', () => setThemePrismJS('default'));

document.addEventListener('DOMContentLoaded', () => {

    /**
     * Добавляет в меню заголовки разделов
     */
    document.querySelectorAll('[data-docsection="first"]').forEach(item => {
        let li = document.createElement('li');
        li.textContent = item.dataset.docsectionName;
        li.classList.add('docsection-name');

        item.before(li);
    });

    /**
     * Добавляет кнопку Показвть/Скрыть код перед элементами с CSS-классом example,
     * но чтобы у элементов небыло при этом установленно CSS-класс show-code
     */
    document.querySelectorAll('.example').forEach(example => {
        if (!example.classList.contains('show-code')) {
            let btn = document.createElement('button');
            btn.className = 'showCode';
            btn.classList.add('showCode', 'wn-icon-code');
            btn.textContent = 'Show Code';

            let panel = document.createElement('div');

            panel.append(btn); // добавляет узлы или строки в конец node

            example.before(panel); // вставляет узлы или строки до node

            btn.addEventListener('click', () => {
                example.classList.toggle('show-code');

                btn.textContent = btn.textContent === 'Show Code' ? 'Hide Code' : 'Show Code';
            })
        }
    });

    /**
     * Внешним ссылкам прописывает атрибуты target="_blank" и rel="noopener noreferrer"
     */
    document.querySelectorAll('.body-docui a').forEach(link => {
        if (link.href !== 'javascript:;' && window.location.hostname != new URL(link.href).hostname) {
            link.setAttribute('target', '_blank');
            link.setAttribute('rel', 'noopener noreferrer');
        }
    });

});
