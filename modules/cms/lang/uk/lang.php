<?php

return [
    'cms_object' => [
        'invalid_file' => 'Помилка в імені файлу: :name. Імена файлів можуть містити тільки латинські букви, цифри, знаки підкреслення і точки. Приклад правильних імен файлів: page.htm, page, subdirectory/page',
        'invalid_property' => "Параметр ':name' не можна змінити.",
        'file_already_exists' => "Файл ':name' вже існує.",
        'error_saving' => "Помилка збереження файлу ':name'. Будь ласка, перевірте права на запис.",
        'error_creating_directory' => 'Помилка створення директорії :name. Будь ласка, перевірте права на запис.',
        'invalid_file_extension' => 'Зазначено неправильне розширення файлу: :invalid. Дозволені розширення: :allowed.',
        'error_deleting' => "Неможливо видалити файл шаблону ':name'. Будь ласка, перевірте права на запис.",
        'delete_success' => 'Шаблони були успішно видалені: :count.',
        'file_name_required' => 'Будь ласка, вкажіть ім\'я файлу шаблону.',
        'safe_mode_enabled' => 'Безпечний режим в даний момент включений.'
    ],
    'dashboard' => [
        'active_theme' => [
            'widget_title_default' => 'Веб-сайт',
            'online' => 'Онлайн',
            'maintenance' => 'В розробці',
            'manage_themes' => 'Керування темами',
            'customize_theme' => 'Налаштування теми'
        ],
    ],
    'theme' => [
        'not_found_name' => "Тема ':name' не знайдена.",
        'by_author' => 'Автор :name',
        'active' => [
            'not_set' => 'Активна тема не встановлена.',
            'not_found' => 'Активна тема не знайдена.'
        ],
        'edit' => [
            'not_set' => 'Тема для редагування не встановлена.',
            'not_found' => 'Тема для редагування не знайдена.',
            'not_match' => 'Об\'єкт, який ви намагаєтеся відкрити, не належить редагованої темі. Будь ласка, оновіть сторінку.'
        ],
        'settings_menu' => 'Фронтенд теми',
        'settings_menu_description' => 'Керування інтерфейсною темою',
        'default_tab' => 'Властивості',
        'name_label' => 'Назва',
        'name_create_placeholder' => 'Назва нової теми',
        'author_label' => 'Автор',
        'author_placeholder' => 'Ім\'я автора або назва компанії',
        'description_label' => 'Опис',
        'description_placeholder' => 'Опис теми',
        'homepage_label' => 'Домашня сторінка',
        'homepage_placeholder' => 'Адреса сайту',
        'code_label' => 'Унікальний код',
        'code_placeholder' => 'Унікальний код теми, який використовуються для її поширення',
        'preview_image_label' => 'Попередній перегляд',
        'preview_image_placeholder' => 'Шлях до зображення для попереднього перегляду.',
        'dir_name_label' => 'Назва директорії',
        'dir_name_create_label' => 'Директорія теми',
        'theme_label' => 'Тема',
        'theme_title' => 'Теми',
        'activate_button' => 'Активувати',
        'active_button' => 'Активовано',
        'customize_theme' => 'Налаштування теми',
        'customize_button' => 'Налаштувати тему',
        'duplicate_button' => 'Дублювати',
        'duplicate_title' => 'Дублювати тему',
        'duplicate_theme_success' => 'Дублювання успішно завершено!',
        'manage_button' => 'Керування',
        'manage_title' => 'Керування темою',
        'edit_properties_title' => 'Тема',
        'edit_properties_button' => 'Редагування властивостей',
        'save_properties' => 'Зберегти властивості',
        'import_button' => 'Імпортувати',
        'import_title' => 'Імпортувати тему',
        'import_theme_success' => 'Імпорт теми успішно завершено!',
        'import_uploaded_file' => 'Файл архіву теми',
        'import_overwrite_label' => 'Перезаписувати існуючі файли',
        'import_overwrite_comment' => 'Вимкніть цю опцію, щоб імпортувати тільки нові файли',
        'import_folders_label' => 'Директорії',
        'import_folders_comment' => 'Будь ласка, оберіть директорії теми, які ви хотіли б імпортувати',
        'export_button' => 'Експорт',
        'export_title' => 'Експортувати тему',
        'export_folders_label' => 'Директорії',
        'export_folders_comment' => 'Будь ласка, оберіть директорії теми, які ви хотіли б експортувати',
        'delete_button' => 'Видалити',
        'delete_confirm' => 'Ви впевнені, що хочете видалити цю тему? Ця дія є незворотнім!',
        'delete_active_theme_failed' => 'Неможливо видалити активний тему, спробуйте зробити іншу тему активною.',
        'delete_theme_success' => 'Видалення теми успішно завершено!',
        'create_title' => 'Створити тему',
        'create_button' => 'Створити',
        'create_new_blank_theme' => 'Створити нову тему',
        'create_theme_success' => 'Тема була успішно створена',
        'create_theme_required_name' => 'Будь ласка, вкажіть назву для теми.',
        'new_directory_name_label' => 'Директорія теми',
        'new_directory_name_comment' => 'Вкажіть нову назву каталогу дубліката теми.',
        'dir_name_invalid' => 'Назва може містити тільки цифри, латинські літери і такі символи: _ -',
        'dir_name_taken' => 'Зазначений каталог вже існує.',
        'find_more_themes' => 'Знайти нові теми',
        'saving' => 'Збереження теми...',
        'return' => 'Повернутися до списку тем'
    ],
    'maintenance' => [
        'settings_menu' => 'Режим обслуговування',
        'settings_menu_description' => 'Керування режимом роботи сайту.',
        'is_enabled' => 'Увімкнути режим обслуговування',
        'is_enabled_comment' => 'При активації цього режиму відвідувачі сайту побачать сторінку обрану нижче.',
        'hint' => 'Режим обслуговування покаже сторінку обслуговування для відвідувачів, що не авторизувалися в CMS.'
    ],
    'page' => [
        'not_found_name' => "Сторінка ':name' не знайдена",
        'not_found' => [
            'label' => 'Сторінка не знайдена',
            'help' => 'Запрошення сторінка не знайдена.'
        ],
        'custom_error' => [
            'label' => 'Помилка на сторінці',
            'help' => 'На жаль, сторінка не може бути відображена через помилку.'
        ],
        'menu_label' => 'Сторінки',
        'unsaved_label' => 'Незбережена(і) сторінка(и)',
        'no_list_records' => 'Сторінки не знайденi',
        'new' => 'Нова сторінка',
        'invalid_url' => 'Невірний формат адреси. Адреса сторінки повинен починатися зі знака / і може містити цифри, латинські літери, і такі знаки: ._- [] :? | / + * ^ $',
        'delete_confirm_multiple' => 'Ви дійсно хочете видалити виділені сторінки?',
        'delete_confirm_single' => 'Ви дійсно хочете видалити цю сторінку?',
        'no_layout' => '-- без шаблону --',
        'cms_page' => 'CMS сторінка',
        'title' => 'Заголовок сторінки',
        'url' => 'URL сторінки',
        'file_name' => 'Файл сторінки'
    ],
    'layout' => [
        'not_found_name' => "Не вдалося знайти шаблон (layout) з ім'ям :name.",
        'menu_label' => 'Шаблони',
        'unsaved_label' => 'Незбережений(і) макет(и)',
        'no_list_records' => 'Шаблони не знайдені',
        'new' => 'Новий шаблон',
        'delete_confirm_multiple' => 'Ви дійсно хочете видалити виділені шаблони?',
        'delete_confirm_single' => 'Ви дійсно хочете видалити цей шаблон?'
    ],
    'partial' => [
        'not_found_name' => "Не вдалося знайти шаблон (partial) з ім'ям :name.",
        'invalid_name' => 'Помилка в імені шаблону (partial) :name.',
        'menu_label' => 'Фрагменти',
        'unsaved_label' => 'Незбережений(і) фрагмент(и)',
        'no_list_records' => 'Фрагменти не знайдені',
        'delete_confirm_multiple' => 'Ви дійсно хочете видалити виділені фрагменти?',
        'delete_confirm_single' => 'Ви дійсно хочете видалити цей фрагмент?',
        'new' => 'Новий фрагмент'
    ],
    'content' => [
        'not_found_name' => "Не вдалося знайти файл вмісту (content file): ':name'.",
        'menu_label' => 'Вміст',
        'unsaved_label' => 'Незбережені файли',
        'no_list_records' => 'Файли з вмістом не знайдені',
        'delete_confirm_multiple' => 'Ви дійсно хочете видалити виділені файли?',
        'delete_confirm_single' => 'Ви дійсно хочете видалити цей файл?',
        'new' => 'Новий файл вмісту'
    ],
    'ajax_handler' => [
        'invalid_name' => 'Помилка в імені обробника AJAX: :name.',
        'not_found' => "Обробник AJAX не найден: ':name'.",
    ],
    'cms' => [
        'menu_label' => 'CMS'
    ],
    'sidebar' => [
        'add' => 'Створити',
        'search' => 'Пошук...'
    ],
    'editor' => [
        'settings' => 'Налаштування',
        'title' => 'Заголовок',
        'new_title' => 'Заголовок сторінки',
        'url' => 'Адреса',
        'filename' => 'Ім\'я файлу',
        'layout' => 'Шаблон',
        'description' => 'Опис',
        'preview' => 'Переглянути',
        'meta' => 'Метатеги',
        'meta_title' => 'Заголовок (meta title)',
        'meta_description' => 'Опис (meta description)',
        'markup' => 'Шаблон',
        'code' => 'Код',
        'content' => 'Зміст',
        'hidden' => 'Прихована сторінка',
        'hidden_comment' => 'Приховані сторінки доступні тільки для авторизованих в системі користувачів.',
        'enter_fullscreen' => 'Увійти в повноекранний режим',
        'exit_fullscreen' => 'Вийти з повноекранного режиму',
        'open_searchbox' => 'Відкрити вікно пошуку',
        'close_searchbox' => 'Закрити вікно пошуку',
        'open_replacebox' => 'Відкрито вікно замінити',
        'close_replacebox' => 'Закрити вікно замінити'
    ],
    'asset' => [
        'menu_label' => 'Ресурси',
        'unsaved_label' => 'Незбережений(і) файл(и)',
        'drop_down_add_title' => 'Додати...',
        'drop_down_operation_title' => 'Дія...',
        'upload_files' => 'Завантажити файли',
        'create_file' => 'Створити файл',
        'create_directory' => 'Створити директорію',
        'directory_popup_title' => 'Нова директорія',
        'directory_name' => 'Назва директорії',
        'rename' => 'Перейменувати',
        'delete' => 'Видалити',
        'move' => 'Перемістити',
        'select' => 'Обрати',
        'new' => 'Новий файл',
        'rename_popup_title' => 'Перейменувати',
        'rename_new_name' => 'Нове ім\'я',
        'invalid_path' => 'Шлях може містити тільки цифри, латинські літери, пробіли і наступні символи: ._- /',
        'error_deleting_file' => 'Помилка видалення файлу :name.',
        'error_deleting_dir_not_empty' => 'Неможливо видалити директорію :name. Директорія містить файли або піддиректорії.',
        'error_deleting_dir' => 'Помилка видалення директорії:name.',
        'invalid_name' => 'Назва може містити тільки цифри, латинські літери, пробіли і наступні символи: ._-',
        'original_not_found' => 'Оригінальний файл або директорія не знайдено',
        'already_exists' => 'Файл або директорія з таким ім\'ям вже існує',
        'error_renaming' => 'Неможливо перейменувати файл або директорію',
        'name_cant_be_empty' => 'Назва не може бути порожньою',
        'too_large' => 'Завантажений файл занадто великий. Максимальний допустимий розмір файлу складає :max_size',
        'type_not_allowed' => 'Дозволені файли лише наступних типів: :allowed_types',
        'file_not_valid' => 'Файл не може бути збережений',
        'error_uploading_file' => "Помилка завантаження файлу ':name': :error",
        'move_please_select' => 'будь ласка, оберіть директорію',
        'move_destination' => 'Папка призначення',
        'move_popup_title' => 'Перемістити файли',
        'move_button' => 'Перемістити',
        'selected_files_not_found' => 'Вибрані файли не знайдені',
        'select_destination_dir' => 'Будь ласка, оберіть директорію',
        'destination_not_found' => 'Кінцева директорія не знайдена',
        'error_moving_file' => 'Не вдалося перемістити файл :file',
        'error_moving_directory' => 'Не вдалося перемістити директорію :dir',
        'error_deleting_directory' => 'Не вдалося видалити директорію :dir',
        'no_list_records' => 'Файли не знайдені',
        'delete_confirm' => 'Видалити обрані файли або каталоги?',
        'path' => 'Шлях'
    ],
    'component' => [
        'menu_label' => 'Компоненти',
        'unnamed' => 'Без назви',
        'no_description' => 'Без опису',
        'alias' => 'Назва компонента',
        'alias_description' => 'Назва компонента визначає його ім\'я, під яким він доступний в коді сторінки або шаблону.',
        'validation_message' => 'Псевдонім обов\'язковий і може містити тільки латинські букви, цифри і знаки підкреслення. Псевдоніми повинні починатися з літери.',
        'invalid_request' => 'Шаблон не може бути збережений, так як містить пошкоджену інформацію про компоненти.',
        'no_records' => 'Компоненти не знайдені',
        'not_found' => "Компонент ':name' не знайдено.",
        'method_not_found' => "Компонент ':name' не містить метод ':method'.",
    ],
    'template' => [
        'invalid_type' => 'Невідомий тип шаблону.',
        'not_found' => 'Запитаний шаблон не найден.',
        'saved' => 'Шаблон був успішно збережений.',
        'no_list_records' => 'Записів не знайдено',
        'delete_confirm' => 'Видалити вибрані шаблони?',
        'order_by' => 'Сортувати за'
    ],
    'permissions' => [
        'name' => 'Керування CMS',
        'manage_content' => 'Керування контентом',
        'manage_assets' => 'Керування файлами',
        'manage_pages' => 'Керування сторінками',
        'manage_layouts' => 'Керування шаблонами',
        'manage_partials' => 'Керування фрагментами',
        'manage_themes' => 'Керування темами',
        'manage_theme_options' => 'Налаштувати поточну тему CMS',
    ],
    'theme_log' => [
        'hint' => 'Цей журнал відображає будь-які зміни, внесені до теми адміністраторами в задній частині області CMS.',
        'menu_label' => 'Журнал змін тем',
        'menu_description' => 'Переглянути зміни, внесені до активної теми.',
        'empty_link' => 'Очистити журнал',
        'empty_loading' => 'Очищення журналу...',
        'empty_success' => 'Журнал очищено',
        'return_link' => 'Повернутися до журналу',
        'id' => 'ID',
        'id_label' => 'ID запису журналу',
        'created_at' => 'Дата, час',
        'user' => 'Користувач',
        'type' => 'Тип',
        'type_create' => 'Створити',
        'type_update' => 'Оновити',
        'type_delete' => 'Видалити',
        'theme_name' => 'Тема',
        'theme_code' => 'Код теми',
        'old_template' => 'Шаблон (старий)',
        'new_template' => 'Шаблон (новий)',
        'template' => 'Шаблон',
        'diff' => 'Зміни',
        'old_value' => 'Старе значення',
        'new_value' => 'Нове значення',
        'preview_title' => 'Зміни в шаблоні',
        'template_updated' => 'Шаблон було оновлено',
        'template_created' => 'Шаблон був створений',
        'template_deleted' => 'Шаблон був видалений'
    ]
];
