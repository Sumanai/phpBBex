<?php
/**
*
* This file is part of the phpBB Forum Software package.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_SEARCH_INDEX_EXPLAIN'				=> 'Здесь вы можете управлять индексами поискового механизма. Поскольку обычно используется только один механизм, необходимо удалять все неиспользуемые индексы. После изменения каких-либо настроек поиска (например, минимального/максимального количества символов) имеет смысл повторно создать поисковые индексы для того, чтобы они отражали произведённые изменения.',
	'ACP_SEARCH_SETTINGS_EXPLAIN'			=> 'Здесь вы можете указать поисковый механизм, который будет использоваться для индексации сообщений и осуществления поиска. Также вы можете устанавливать различные настройки, которые могут влиять на количество ресурсов, требуемых для обработки поисковых запросов. Некоторые из этих настроек одинаковы для всех поисковых механизмов.',

	'COMMON_WORD_THRESHOLD'					=> 'Порог общих слов',
	'COMMON_WORD_THRESHOLD_EXPLAIN'			=> 'Слова, содержащиеся в основной массе всех сообщений, будут считаться общими. Общие слова игнорируются в поисковых запросах. Введите 0 для отключения этой функции. Функция работает только при наличии более 100 сообщений. Для обновления списка общих слов необходимо пересоздать поисковые индексы.',
	'CONFIRM_SEARCH_BACKEND'				=> 'Вы действительно хотите переключиться на другой поисковый механизм? После переключения нужно будет создать поисковые индексы для использования нового поискового механизма. Если вы не планируете переключаться обратно на старый поисковый механизм, то можете удалить поисковые индексы от него для освобождения системных ресурсов.',
	'CONTINUE_DELETING_INDEX'				=> 'Продолжить предыдущий процесс удаления индексов',
	'CONTINUE_DELETING_INDEX_EXPLAIN'		=> 'Ранее был запущен процесс удаления поисковых индексов. Необходимо дождаться завершения этого процесса для получения доступа к странице поисковых индексов или отменить его.',
	'CONTINUE_INDEXING'						=> 'Продолжить предыдущий процесс индексирования',
	'CONTINUE_INDEXING_EXPLAIN'				=> 'Ранее был запущен процесс индексации. Необходимо дождаться завершения этого процесса для получения доступа к странице поисковых индексов или отменить его.',
	'CREATE_INDEX'							=> 'Создать индексы',

	'DELETE_INDEX'							=> 'Удалить индексы',
	'DELETING_INDEX_IN_PROGRESS'			=> 'Удаление поисковых индексов…',
	'DELETING_INDEX_IN_PROGRESS_EXPLAIN'	=> 'Идёт удаление поисковых индексов. Этот процесс может занять несколько минут.',

	'FULLTEXT_MYSQL_INCOMPATIBLE_DATABASE'	=> 'Механизм полнотекстового поиска MySQL может использоваться только на MySQL4 и выше.',
	'FULLTEXT_MYSQL_NOT_SUPPORTED'				=> 'Полнотекстовые индексы MySQL могут использоваться только с таблицами MyISAM или InnoDB. Для использования полнотекстовых индексов с таблицами InnoDB требуется MySQL 5.6.4 или более поздней версии.',
	'FULLTEXT_MYSQL_TOTAL_POSTS'			=> 'Общее количество индексированных сообщений',
	'FULLTEXT_MYSQL_MIN_SEARCH_CHARS_EXPLAIN'	=> 'Слова, состоящие из как минимум данного количества символов будут проиндексированы для поиска. Изменить данное значение можно только путем изменения настроек сервера MySQL.',
	'FULLTEXT_MYSQL_MAX_SEARCH_CHARS_EXPLAIN'   => 'Слова, состоящие не более, чем из данного количества символов, будут проиндексированы для поиска. Изменить данное значение можно только путем изменения настроек сервера MySQL.',

	'FULLTEXT_POSTGRES_INCOMPATIBLE_DATABASE'	=> 'Механизм полнотекстового поиска PostgreSQL может быть использован только на СУБД PostgreSQL.',
	'FULLTEXT_POSTGRES_TOTAL_POSTS'			=> 'Общее количество индексированных сообщений',
	'FULLTEXT_POSTGRES_VERSION_CHECK'		=> 'Версия PostgreSQL',
	'FULLTEXT_POSTGRES_TS_NAME'				=> 'Профиль конфигурации полнотекстового поиска:',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN'			=> 'Минимальная длина поискового запроса',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN'			=> 'Максимальная длина поискового запроса',
	'FULLTEXT_POSTGRES_VERSION_CHECK_EXPLAIN'		=> 'Для данного поискового механизма требуется PostgreSQL версии 8.3 и выше.',
	'FULLTEXT_POSTGRES_TS_NAME_EXPLAIN'				=> 'Профиль конфигурации полнотекстового поиска, используемый для определения обработчика и словаря.',
	'FULLTEXT_POSTGRES_MIN_WORD_LEN_EXPLAIN'			=> 'Слова, состоящие не менее, чем из указанного количества символов, будут включены в запрос к базе данных.',
	'FULLTEXT_POSTGRES_MAX_WORD_LEN_EXPLAIN'			=> 'Слова, состоящие не более, чем из указанного количества символов, будут включены в запрос к базе данных.',

	'FULLTEXT_SPHINX_CONFIGURE'				=> 'Задайте следующие настройки для создания файла конфигурации Sphinx',
	'FULLTEXT_SPHINX_DATA_PATH'				=> 'Путь к папке с данными',
	'FULLTEXT_SPHINX_DATA_PATH_EXPLAIN'		=> 'Указанный путь будет использован для хранения индексов и файлов журналов. Необходимо создать данную папку за пределами пространства, доступного из веб-пространства (путь должен заканчиваться прямым слэшем)',
	'FULLTEXT_SPHINX_DELTA_POSTS'			=> 'Количество сообщений в часто обновляемом дельта-индексе',
	'FULLTEXT_SPHINX_HOST'					=> 'Сервер Sphinx',
	'FULLTEXT_SPHINX_HOST_EXPLAIN'			=> 'Сервер, на котором запущен процесс sphinx (searchd). Оставьте значение пустым для использования локального сервера по умолчанию',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT'		=> 'Ограничение памяти для процесса индексирования',
	'FULLTEXT_SPHINX_INDEXER_MEM_LIMIT_EXPLAIN'	=> 'Данное значение должно быть всегда меньше, чем доступное серверу количество оперативной памяти. Если возникают проблемы с производительностью, это может быть связано с чрезмерным потреблением ресурсов процессом индексирования. Уменьшение объема доступной для него памяти может снизить нагрузку на сервер.',
	'FULLTEXT_SPHINX_MAIN_POSTS'			=> 'Количество сообщений в основном индексе',
	'FULLTEXT_SPHINX_PORT'					=> 'Порт Sphinx',
	'FULLTEXT_SPHINX_PORT_EXPLAIN'			=> 'Порт, по которому доступен процесс sphinx (searchd). Оставьте значение пустым для использования порта по умолчанию 9312',
	'FULLTEXT_SPHINX_WRONG_DATABASE'		=> 'Поисковый механизм Sphinx для phpBB поддерживает только СУБД MySQL и PostgreSQL.',
	'FULLTEXT_SPHINX_CONFIG_FILE'			=> 'Файл конфигурации Sphinx',
	'FULLTEXT_SPHINX_CONFIG_FILE_EXPLAIN'	=> 'Содержимое для создания файла конфигурации Sphinx. Указанные данные должны быть сохранены в файле sphinx.conf, используемый поисковым процессом sphinx. Замените лексемы [dbuser] и [dbpassword] на имя и пароль для вашей базы данных.',
	'FULLTEXT_SPHINX_NO_CONFIG_DATA'		=> 'Путь к папке с данными Sphinx не задан. Задайте путь и нажмите «Отправить» для создания файла конфигурации.',

	'GENERAL_SEARCH_SETTINGS'				=> 'Общие настройки поиска',
	'GO_TO_SEARCH_INDEX'					=> 'Перейти на страницу поисковых индексов',

	'INDEX_STATS'							=> 'Статистика индексации',
	'INDEXING_IN_PROGRESS'					=> 'Идёт индексация…',
	'INDEXING_IN_PROGRESS_EXPLAIN'			=> 'Идёт индексация всех имеющихся сообщений. Этот процесс может занять от нескольких минут до нескольких часов в зависимости от объёма данных.',

	'LIMIT_SEARCH_LOAD'						=> 'Ограничение поиска при загрузке системы',
	'LIMIT_SEARCH_LOAD_EXPLAIN'				=> 'Если загрузка системы в течение одной минуты превышает это значение, то поисковая страница будет недоступна. Значение 1.0 эквивалентно стопроцентному использованию одного процессора. Эта опция функционирует только на UNIX-подобных серверах.',

	'MAX_SEARCH_CHARS'						=> 'Максимум символов для индексации',
	'MAX_SEARCH_CHARS_EXPLAIN'				=> 'Слова с меньшим числом символов будут проиндексированы и доступны для поиска.',
	'MAX_NUM_SEARCH_KEYWORDS'				=> 'Максимальное число искомых слов',
	'MAX_NUM_SEARCH_KEYWORDS_EXPLAIN'		=> 'Максимальное количество слов, которые пользователь может искать одновременно. Установите 0 для снятия ограничений.',
	'MIN_SEARCH_CHARS'						=> 'Минимум символов для индексации',
	'MIN_SEARCH_CHARS_EXPLAIN'				=> 'Слова с большим числом символов будут проиндексированы и доступны для поиска.',
	'MIN_SEARCH_AUTHOR_CHARS'				=> 'Минимальное число символов в именах',
	'MIN_SEARCH_AUTHOR_CHARS_EXPLAIN'		=> 'Пользователи должны будут ввести не меньше указанного количества символов при осуществлении поиска автора по маске. Если имя автора короче указанного значения, то можно осуществлять поиск по полному имени автора.',

	'PROGRESS_BAR'							=> 'Индикатор выполнения',

	'SEARCH_GUEST_INTERVAL'					=> 'Интервал между запросами для гостей',
	'SEARCH_GUEST_INTERVAL_EXPLAIN'			=> 'Время в секундах, которое гость должен выждать перед выполнением следующего поискового запроса. Если поиском пользуется один гость, то все остальные в это время ждут указанное здесь время.',
	'SEARCH_INDEX_CREATE_REDIRECT'			=> array(
		1	=> 'Все сообщения до сообщения под номером %2$d успешно проиндексированы, в текущем шаге проиндексировано %1$d сообщение.<br />',
		2	=> 'Все сообщения до сообщения под номером %2$d успешно проиндексированы, в текущем шаге проиндексировано %1$d сообщения.<br />',
		3	=> 'Все сообщения до сообщения под номером %2$d успешно проиндексированы, в текущем шаге проиндексировано %1$d сообщений.<br />',
	),
	'SEARCH_INDEX_CREATE_REDIRECT_RATE'		=> array(
		1	=> 'Текущая скорость индексации — примерно %1$.1f сообщение в секунду.<br />Идёт индексация…',
		2	=> 'Текущая скорость индексации — примерно %1$.1f сообщения в секунду.<br />Идёт индексация…',
		3	=> 'Текущая скорость индексации — примерно %1$.1f сообщений в секунду.<br />Идёт индексация…',
	),
	'SEARCH_INDEX_DELETE_REDIRECT'			=> array(
		1	=> 'Все сообщения до сообщения под номером %2$d успешно удалены из поисковых индексов.<br />Идёт удаление…',
		2	=> 'Все сообщения до сообщения под номером %2$d успешно удалены из поисковых индексов.<br />Идёт удаление…',
		3	=> 'Все сообщения до сообщения под номером %2$d успешно удалены из поисковых индексов.<br />Идёт удаление…',
	),
	'SEARCH_INDEX_CREATED'					=> 'Все сообщения в базе данных успешно проиндексированы.',
	'SEARCH_INDEX_REMOVED'					=> 'Поисковые индексы успешно удалены.',
	'SEARCH_INTERVAL'						=> 'Интервал между поисковыми запросами',
	'SEARCH_INTERVAL_EXPLAIN'				=> 'Время в секундах, которое пользователь должен выждать перед выполнением следующего поискового запроса. Этот интервал проверяется для каждого пользователя.',
	'SEARCH_STORE_RESULTS'					=> 'Кэширование результатов поиска',
	'SEARCH_STORE_RESULTS_EXPLAIN'			=> 'Длительность кэширования результатов поиска (в секундах). Введите 0 для отключения кэширования результатов.',
	'SEARCH_TYPE'							=> 'Поисковый механизм',
	'SEARCH_TYPE_EXPLAIN'					=> 'phpBB позволяет выбрать механизм для осуществления поиска в сообщениях. По умолчанию используется встроенный полнотекстовый поисковый механизм phpBB.',
	'SWITCHED_SEARCH_BACKEND'				=> 'Вы переключились на другой поисковый механизм. Убедитесь, что имеются индексы для этого поискового механизма, и, в случае необходимости, создайте их.',

	'TOTAL_WORDS'							=> 'Общее количество индексированных слов',
	'TOTAL_MATCHES'							=> 'Число слов, связанных с сообщениями',

	'YES_SEARCH'							=> 'Включить поисковые возможности',
	'YES_SEARCH_EXPLAIN'					=> 'Включение поисковых возможностей, включая поиск пользователей.',
	'YES_SEARCH_UPDATE'						=> 'Включить полнотекстовое обновление',
	'YES_SEARCH_UPDATE_EXPLAIN'				=> 'Обновление полнотекстовых индексов при отправке сообщений. Опция не работает, если поисковые возможности отключены.',

	'DEFAULT_SEARCH_TITLEONLY'				=> 'По умолчанию искать только по названиям тем',
	'DEFAULT_SEARCH_TITLEONLY_EXPLAIN'		=> 'Затрагивает глобальный поиск и поиск по конкретному форуму.',

	'SEARCH_HIGHLIGHT_KEYWORDS'				=> 'Подсвечивать найденные слова',
	'SEARCH_HIGHLIGHT_KEYWORDS_EXPLAIN'		=> 'Создаёт ссылки на viewtopic.php с параметром hilit для найденных тем.',
));
