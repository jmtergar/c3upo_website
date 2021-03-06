<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('es', array (
  'validators' => 
  array (
    'This value should be false.' => 'Este valor debería ser falso.',
    'This value should be true.' => 'Este valor debería ser verdadero.',
    'This value should be of type {{ type }}.' => 'Este valor debería ser de tipo {{ type }}.',
    'This value should be blank.' => 'Este valor debería estar vacío.',
    'The value you selected is not a valid choice.' => 'El valor seleccionado no es una opción válida.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Debe seleccionar al menos {{ limit }} opción.|Debe seleccionar al menos {{ limit }} opciones.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Debe seleccionar como máximo {{ limit }} opción.|Debe seleccionar como máximo {{ limit }} opciones.',
    'One or more of the given values is invalid.' => 'Uno o más de los valores indicados no son válidos.',
    'This field was not expected.' => 'Este campo no se esperaba.',
    'This field is missing.' => 'Este campo está desaparecido.',
    'This value is not a valid date.' => 'Este valor no es una fecha válida.',
    'This value is not a valid datetime.' => 'Este valor no es una fecha y hora válidas.',
    'This value is not a valid email address.' => 'Este valor no es una dirección de email válida.',
    'The file could not be found.' => 'No se pudo encontrar el archivo.',
    'The file is not readable.' => 'No se puede leer el archivo.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande ({{ size }} {{ suffix }}). El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'El tipo mime del archivo no es válido ({{ type }}). Los tipos mime válidos son {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Este valor debería ser {{ limit }} o menos.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Este valor es demasiado largo. Debería tener {{ limit }} carácter o menos.|Este valor es demasiado largo. Debería tener {{ limit }} caracteres o menos.',
    'This value should be {{ limit }} or more.' => 'Este valor debería ser {{ limit }} o más.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Este valor es demasiado corto. Debería tener {{ limit }} carácter o más.|Este valor es demasiado corto. Debería tener {{ limit }} caracteres o más.',
    'This value should not be blank.' => 'Este valor no debería estar vacío.',
    'This value should not be null.' => 'Este valor no debería ser nulo.',
    'This value should be null.' => 'Este valor debería ser nulo.',
    'This value is not valid.' => 'Este valor no es válido.',
    'This value is not a valid time.' => 'Este valor no es una hora válida.',
    'This value is not a valid URL.' => 'Este valor no es una URL válida.',
    'The two values should be equal.' => 'Los dos valores deberían ser iguales.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'El archivo es demasiado grande. El tamaño máximo permitido es {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'El archivo es demasiado grande.',
    'The file could not be uploaded.' => 'No se pudo subir el archivo.',
    'This value should be a valid number.' => 'Este valor debería ser un número válido.',
    'This file is not a valid image.' => 'El archivo no es una imagen válida.',
    'This is not a valid IP address.' => 'Esto no es una dirección IP válida.',
    'This value is not a valid language.' => 'Este valor no es un idioma válido.',
    'This value is not a valid locale.' => 'Este valor no es una localización válida.',
    'This value is not a valid country.' => 'Este valor no es un país válido.',
    'This value is already used.' => 'Este valor ya se ha utilizado.',
    'The size of the image could not be detected.' => 'No se pudo determinar el tamaño de la imagen.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'El ancho de la imagen es demasiado grande ({{ width }}px). El ancho máximo permitido es de {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'El ancho de la imagen es demasiado pequeño ({{ width }}px). El ancho mínimo requerido es {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'La altura de la imagen es demasiado grande ({{ height }}px). La altura máxima permitida es de {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'La altura de la imagen es demasiado pequeña ({{ height }}px). La altura mínima requerida es de {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Este valor debería ser la contraseña actual del usuario.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Este valor debería tener exactamente {{ limit }} carácter.|Este valor debería tener exactamente {{ limit }} caracteres.',
    'The file was only partially uploaded.' => 'El archivo fue sólo subido parcialmente.',
    'No file was uploaded.' => 'Ningún archivo fue subido.',
    'No temporary folder was configured in php.ini.' => 'Ninguna carpeta temporal fue configurada en php.ini.',
    'Cannot write temporary file to disk.' => 'No se pudo escribir el archivo temporal en el disco.',
    'A PHP extension caused the upload to fail.' => 'Una extensión de PHP hizo que la subida fallara.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Esta colección debe contener {{ limit }} elemento o más.|Esta colección debe contener {{ limit }} elementos o más.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Esta colección debe contener {{ limit }} elemento o menos.|Esta colección debe contener {{ limit }} elementos o menos.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Esta colección debe contener exactamente {{ limit }} elemento.|Esta colección debe contener exactamente {{ limit }} elementos.',
    'Invalid card number.' => 'Número de tarjeta inválido.',
    'Unsupported card type or invalid card number.' => 'Tipo de tarjeta no soportado o número de tarjeta inválido.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Esto no es un International Bank Account Number (IBAN) válido.',
    'This value is not a valid ISBN-10.' => 'Este valor no es un ISBN-10 válido.',
    'This value is not a valid ISBN-13.' => 'Este valor no es un ISBN-13 válido.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Este valor no es ni un ISBN-10 válido ni un ISBN-13 válido.',
    'This value is not a valid ISSN.' => 'Este valor no es un ISSN válido.',
    'This value is not a valid currency.' => 'Este valor no es una divisa válida.',
    'This value should be equal to {{ compared_value }}.' => 'Este valor debería ser igual que {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Este valor debería ser mayor que {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Este valor debería ser mayor o igual que {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Este valor debería ser menor que {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Este valor debería ser menor o igual que {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Este valor debería ser distinto de {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Este valor no debería ser idéntico a {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'La proporción de la imagen es demasiado grande ({{ ratio }}). La máxima proporción permitida es {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'La proporción de la imagen es demasiado pequeña ({{ ratio }}). La mínima proporción permitida es {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'La imagen es cuadrada ({{ width }}x{{ height }}px). Las imágenes cuadradas no están permitidas.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'La imagen está orientada horizontalmente ({{ width }}x{{ height }}px). Las imágenes orientadas horizontalmente no están permitidas.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'La imagen está orientada verticalmente ({{ width }}x{{ height }}px). Las imágenes orientadas verticalmente no están permitidas.',
    'An empty file is not allowed.' => 'No está permitido un archivo vacío.',
    'The host could not be resolved.' => 'No se puede resolver el host.',
    'This value does not match the expected {{ charset }} charset.' => 'La codificación de caracteres para este valor debería ser {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'No es un Código de Identificación Bancaria (BIC) válido.',
    'This form should not contain extra fields.' => 'Este formulario no debería contener campos adicionales.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'El archivo subido es demasiado grande. Por favor, suba un archivo más pequeño.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'El token CSRF no es válido. Por favor, pruebe a enviar nuevamente el formulario.',
    'email.exist' => 'El E-Mail introducido ya se encuentra registrado en el sistema.',
    'username.exist' => 'El Nombre de usuario introducido ya se encuentra registrado en el sistema.',
    'name.empty' => 'El campo "Nombre" no puede estar vacío.',
    'lastname.empty' => 'El campo "Apellidos" no puee estar vacío.',
    'phone.empty' => 'El campo "Teléfono" no puede estar vacío.',
    'email.empty' => 'El campo "E-Mail" no puede estar vacío.',
    'email.invalid' => 'El campo "E-Mail" tiene un formato incorrecto.',
    'centre.empty' => 'El campo "Centro" no puede estar vacío.',
    'centre.name.used' => 'Ya existe en el sistema un centro con ese nombre.',
    'department.empty' => 'El campo "Departamento" no puede estar vacío.',
    'department.name.used' => 'Ya existe en el sistema un departamento con ese nombre.',
    'groupName.empty' => 'El campo "Nombre del grupo" no puede estar vacío.',
    'groupCode.empty' => 'El campo "Código del grupo" no puede estar vacío.',
    'groupCode.maxLength' => 'El campo "Código del grupo" puede tener un tamaño máximo de 12 caracteres.',
    'groupLeader.empty' => 'El campo "Responsable del grupo" no puede estar vacío.',
    'group.name.used' => 'Ya existe en el sistema un grupo con ese nombre.',
    'leader.name.used' => 'Ya existe en el sistema un responsable con ese nombre.',
    'position.empty' => 'El campo "Cargo" no puede estar vacío.',
    'captcha.error' => 'El campo "Captcha" es incorrecto.',
    'username.empty' => 'El campo "Nombre de usuario" no puede estar vacío.',
    'password.empty.empty' => 'El campo "Contraseña" no puede estar vacío.',
    'centre.name.empty' => 'El campo "Nombre" no puede estar vacío.',
    'department.name.empty' => 'El campo "Nombre" no puede estar vacío.',
    'leader.name.empty' => 'El campo "Nombre" no puede estar vacío.',
    'usingTime.empty' => 'El campo "Tiempo de uso del cluster" no puede estar vacío.',
    'group.empty' => 'El campo "Grupo" no puede estar vacío.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ocurrió un error de autenticación.',
    'Authentication credentials could not be found.' => 'No se encontraron las credenciales de autenticación.',
    'Authentication request could not be processed due to a system problem.' => 'La solicitud de autenticación no se pudo procesar debido a un problema del sistema.',
    'Invalid credentials.' => 'Credenciales no válidas.',
    'Cookie has already been used by someone else.' => 'La cookie ya ha sido usada por otra persona.',
    'Not privileged to request the resource.' => 'No tiene privilegios para solicitar el recurso.',
    'Invalid CSRF token.' => 'Token CSRF no válido.',
    'Digest nonce has expired.' => 'El vector de inicialización (digest nonce) ha expirado.',
    'No authentication provider found to support the authentication token.' => 'No se encontró un proveedor de autenticación que soporte el token de autenticación.',
    'No session available, it either timed out or cookies are not enabled.' => 'No hay ninguna sesión disponible, ha expirado o las cookies no están habilitados.',
    'No token could be found.' => 'No se encontró ningún token.',
    'Username could not be found.' => 'No se encontró el nombre de usuario.',
    'Account has expired.' => 'La cuenta ha expirado.',
    'Credentials have expired.' => 'Las credenciales han expirado.',
    'Account is disabled.' => 'La cuenta está deshabilitada.',
    'Account is locked.' => 'La cuenta está bloqueada.',
  ),
  'messages' => 
  array (
    'label.name' => 'Nombre',
    'label.lastname' => 'Apellidos',
    'label.phone' => 'Teléfono',
    'label.email' => 'E-Mail',
    'label.username' => 'Nombre de usuario en el clúster',
    'label.centre' => 'Centro',
    'label.department' => 'Departamento',
    'label.groupName' => 'Nombre del grupo',
    'label.groupCode' => 'Código del grupo (12 letras máximo)',
    'label.groupWebsite' => 'Página web del grupo',
    'label.groupLeader' => 'Responsable del grupo',
    'label.position' => 'Cargo',
    'label.softwareSpecifications' => 'Software a utilizar',
    'label.description' => 'Uso del clúster',
    'label.group' => 'Grupo',
    'label.usingTime' => 'Tiempo de uso',
    'submit' => 'Enviar',
    'other' => 'Otro',
    'existing' => 'Existente',
    'user.created.success' => 'La solicitud de registro se ha procesado correctamente.',
    'requiredField' => 'Campos requeridos.',
    'registerInfo' => 'Registro para el acceso a los recursos computacionales del C3UPO',
    'groupName.info' => '(por favor, pregunta a tu responsable)',
    'placeholder.selectCenter' => 'Selecciona un centro',
    'placeholder.selectDepartment' => 'Selecciona un departamento',
    'placeholder.selectGroup' => 'Selecciona un grupo',
    'placeholder.selectUsingTime' => 'Selecciona durante cuánto tiempo quieres tener acceso al clúster',
    'placeholder.selectLeader' => 'Selecciona un responsable del grupo',
    'placeholder.name' => 'Nombre',
    'placeholder.lastname' => 'Apellidos',
    'placeholder.phone' => 'Número de teléfono de contacto',
    'placeholder.email' => 'Dirección de correo electrónico',
    'placeholder.centreName' => 'Nombre del centro al que perteneces (Ej. Facultad de Ciencias Experimentales)',
    'placeholder.departmentName' => 'Nombre del departamento al que perteneces (Ej. Biología Molecular e Ingeniería Bioquímica)',
    'placeholder.groupName' => 'Nombre del grupo al que perteneces',
    'placeholder.groupLeader' => 'Responsable del grupo al que perteneces',
    'placeholder.groupWebsite' => 'Sitio web del grupo al que perteneces',
    'placeholder.groupCode' => 'Código del grupo',
    'placeholder.position' => 'Cargo que desempeñas en el grupo',
    'placeholder.softwareSpecification' => 'Software que necesitas que esté instalado en el clúster para poder hacer uso de él.',
    'placeholder.description' => 'Breve descripción del uso que le darás al cluster.',
    '1_MONTH' => '1 mes',
    '6_MONTHS' => '6 meses',
    '1_YEAR' => '1 año',
    '4_YEAR' => '4 años',
    'UNLIMITED' => 'Ilimitado',
    'username.placeholder' => 'Nombre de usuario',
    'password.placeholder' => 'Contraseña',
    'loginAdmin' => 'Acceso al área de administración',
    'label.username.short' => 'Usuario clúster',
    'label.groupLeader.short' => 'Responsable grupo',
    'label.groupCode.short' => 'Código grupo',
    'label.groupWebsite.short' => 'Web grupo',
    'label.description.short' => 'Descripción',
    'label.isClusterUser' => 'Alta en clúster',
    'label.isActiveUser' => 'Activo en clúster',
    'label.centre_tmp' => 'Centro (manual)',
    'label.department_tmp' => 'Departamento (manual)',
    'label.groupName_tmp' => 'Nombre grupo (manual)',
    'label.groupLeader_tmp' => 'Responsable grupo (manual)',
    'label.groupCode_tmp' => 'Código grupo (manual)',
    'label.groupWebsite_tmp' => 'Web grupo (manual)',
    'label.isInDistributionList' => 'Lista de distribución',
    'isClusterUser_0' => 'No',
    'isClusterUser_1' => 'Sí',
    'isUserActive_0' => 'No',
    'isUserActive_1' => 'Sí',
    'isInDistributionList_0' => 'No',
    'isInDistributionList_1' => 'Sí',
    'users' => 'Usuarios',
    'centres' => 'Centros',
    'departments' => 'Departamentos',
    'groups' => 'Grupos',
    'leaders' => 'Responsables',
    'registerAsClusterUser' => 'Registrar como usuario del clúster',
    'disableUser' => 'Bloquear usuario',
    'enableUser' => 'Activar usuario',
    'centre' => 'centro',
    'department' => 'departamento',
    'group' => 'grupo',
    'legend.tableColors' => 'Leyenda de colores',
    'legend.red' => 'Usuario pendiente de verificación (Alta en clúster = No).',
    'legend.orange' => 'Usuario verificado, sin acceso al clúster pero en la lista de distribución (Alta en clúster = Sí, Activo en clúster = No, Lista de distribución = Sí).',
    'legend.yellow' => 'Usuario verificado, activo en el clúster y no está en la lista de distribución (Alta en clúster = Sí, Activo en clúster = Sí, Lista de distribución = No).',
    'legend.grey' => 'Usuario verificado, sin acceso al clúster y no está en la lista de distribución (Alta en clúster = Sí, Activo en clúster = No, Lista de distribución = No).',
    'legend.green' => 'Usuario verificado, dado de alta en el clúster y en la lista de distribución (Alta en clúster = Sí, Activo en clúster = Sí, Lista de distribución = Sí).',
    'legend.ok' => 'Ok',
    'legend.review' => 'Revisar',
    'newCentre' => 'Nuevo centro',
    'editCentre' => 'Editar centro',
    'removeCentre' => 'Eliminar centro',
    'newDepartment' => 'Nuevo departamento',
    'editDepartment' => 'Editar departamento',
    'removeDepartment' => 'Eliminar departamento',
    'newGroup' => 'Nuevo grupo',
    'editGroup' => 'Editar grupo',
    'removeGroup' => 'Eliminar grupo',
    'newLeader' => 'Nuevo responsable',
    'editLeader' => 'Editar responsable',
    'removeLeader' => 'Eliminar responsable',
    'editUser' => 'Editar usuario',
    'distributionList' => 'Lista de distribución',
    'accept' => 'Aceptar',
    'close' => 'Cerrar',
    'clusterUsers' => 'Usuarios registrados en el clúster',
    'pendingUsers' => 'Usuarios pendientes de verificación',
    'allUsers' => 'Todos los usuarios',
    'allUsersInCluster' => 'Todos los usuarios del clúster',
    'activeUsersInCluster' => 'Usuarios activos en el clúster',
    'disabledUsersInCluster' => 'Usuarios bloqueados en el clúster',
    'verifyUser' => 'Verificar usuario',
    'usersRelatedCentre' => 'Usuarios relacionados con el centro',
    'usersRelatedDepartment' => 'Usuarios relacionados con el departamento',
    'usersRelatedGroup' => 'Usuarios relacionados con el grupo',
    'usersRelated' => 'Usuarios relacionados con el',
    'addDistributionList' => 'Añadir a lista de distribución',
    'removeDistributionList' => 'Eliminar de la lista de distribución',
    'delete.centre.text1' => 'Usted va a eliminar del sistema el centro',
    'delete.centre.confirm' => '¿Está seguro?',
    'delete.department.text1' => 'Usted va a eliminar del sistema el departamento',
    'delete.department.confirm' => '¿Está seguro?',
    'delete.group.text1' => 'Usted va a eliminar del sistema el departamento',
    'delete.group.confirm' => '¿Está seguro?',
    'delete.leader.text1' => 'Usted va a eliminar del sistema al responsable',
    'delete.leader.confirm' => '¿Está seguro?',
    'disableUserText' => 'Usted va a marcar como usuario bloqueado en el clúster a',
    'enableUserText' => 'Usted va a marcar como usuario activo en el clúster a',
    'enableUserText.confirm' => '¿Está seguro?',
    'addUserToDistributionListText' => 'Usted va a marcar como usuario de la lista de distribución al usuario',
    'removeUserFromDistributionListText' => 'Usted va a marcar que se ha eliminado de la lista de distribución al usuario',
    'distributionListText.confirm' => '¿Está seguro?',
    'centre.created.success' => 'Centro creado correctamente.',
    'centre.updated.success' => 'Centro actualizado correctamente.',
    'centre.deleted.success' => 'El centro ha sido eliminado correctamente.',
    'department.created.success' => 'Departamento creado correctamente.',
    'department.updated.success' => 'Departamento actualizado correctamente.',
    'department.deleted.success' => 'El departamento ha sido eliminado correctamente.',
    'group.created.success' => 'Grupo creado correctamente.',
    'group.updated.success' => 'Grupo actualizado correctamente.',
    'group.deleted.success' => 'El grupo ha sido eliminado correctamente.',
    'leader.created.success' => 'Responsable creado correctamente.',
    'leader.updated.success' => 'Responsable actualizado correctamente.',
    'leader.deleted.success' => 'El responsable ha sido eliminado correctamente.',
    'user.verify.success' => 'El usuario ha sido marcado registrado correctamente como usuario del clúster.',
    'userStatus.updated.success' => 'El usuario ha sido marcado como activo en el clúster.',
    'user.updated.success' => 'La información del usuario ha sido actualizada correctamente.',
    'distributionListStatus.updated.success' => 'El usuario ha sido marcado como perteneciente a la lista de distribución.',
    'error.deleting.centre' => 'El centro seleccionado no pudo ser eliminado porque hay usuarios relacionados con él.',
    'error.deleting.department' => 'El departamento seleccionado no pudo ser eliminado porque hay usuarios relacionados con él.',
    'error.deleting.group' => 'El grupo seleccionado no pudo ser eliminado porque hay usuarios relacionados con él.',
    'error.deleting.leader' => 'El responsable seleccionado no pudo ser eliminado porque hay grupos relacionados con él.',
    'error.updating.userStatus' => 'El usuario no ha podido ser marcado como activo en el clúster.',
    'error.updating.distributionListStatus' => 'El usuario no ha podido ser marcado como añadido a la lista de distribución.',
    'centre.empty' => 'El campo "Centro" no puede estar vacío.',
    'group.empty' => 'El campo "Grupo" no puede estar vacío.',
    'groupName.empty' => 'El campo "Nombre del grupo" no puede estar vacío.',
    'groupCode.empty' => 'El campo "Código del grupo" no puede estar vacío.',
    'groupLeader.empty' => 'El campo "Responsable del grupo" no puede estar vacío.',
    'noUsers' => 'No se han encontrado usuarios relacionados',
    'linux.command' => 'Acciones requeridas',
    'email.newRegistration.subject' => '[C3UPO_CLUSTER] - Nuevo registro',
    'email.NewRegistration.body' => 'Se ha registrado un nuevo usuario en el sistema: ',
    'clusterInfo' => 'Información sobre el clúster',
    'clusterUsage' => 'Cómo usar el clúster',
    'clusterRegistration' => 'Registrarse',
    'loading' => 'Cargando...',
    'welcomeClusterInfo' => 'Bienvenido a la página informativa del clúster del C3UPO',
    'clusterInfo.intro' => 'Introducción',
    'clusterInfo.text1' => 'El C3UPO dispone de un cluster de supercomputación, que ofrece servicios a diferentes grupos de investigación para facilitar cálculos científicos.',
    'clusterInfo.text2' => 'El clúster ofrece herramientas específicas a los grupos de investigación. De esta forma se facilita el trabajo al investigador, ya que puede trabajar en un solo entorno, sin la necesidad de migrar datos de un lugar a otro.',
    'clusterInfo.hardware' => 'Características de hardware',
    'clusterInfo.nodes' => 'El clúster se compone de 31 nodos de cálculo.',
    'clusterInfo.cores' => 'Esos 31 nodos cuentan con 1032 cores de cálculo.',
    'clusterInfo.cores1' => '13 nodos x 24 cores/nodo = 312 cores.',
    'clusterInfo.cores2' => '18 nodos x 40 cores/nodo = 720 cores.',
    'clusterInfo.connection' => '?? Infiniband QDR/FDR interconnection network. - - conectados como (Infiniband DDR a 20Gbit/seg)???',
    'clusterInfo.memory' => 'La memoria RAM de los nodos es la siguiente:',
    'clusterInfo.memory1' => 'Los nodos nodo01-nodo12 tienen 62 GB de RAM.',
    'clusterInfo.memory2' => 'El nodo nodo13 tiene 125 GB de RAM.',
    'clusterInfo.memory3' => 'Los nodos nodo14-nodo31 tienen 92 GB de RAM.',
    'clusterInfo.capacity' => 'Todos los nodos tienen una carpeta scratch con la siguiente capacidad: ',
    'clusterInfo.capacity1' => 'Los nodos nodo01-nodo12 tienen una capacidad de almacenamiento de 207 GB.',
    'clusterInfo.capacity2' => 'El nodo nodo13 tiene una capacidad de almacenamiento de 239 GB.',
    'clusterInfo.capacity3' => 'Los nodos nodo14-nodo31 tienen una capacidad de almacenamiento de 7,3 TB.',
    'clusterInfo.capacityExtra' => 'Los nodos nodo14-nodo31 tienen una carpeta scratch en discos SSD llamada ssdcratch con una capacidad de 388 GB.',
    'clusterInfo.capacityShared' => 'Capacidad de 25 TB en un sistema de ficheros compartidos BeeGFS.',
    'clusterInfo.queue' => 'SLURM (Simple Linux Utility for Resource Management) como sistema de colas.',
    'clusterInfo.os' => 'Sistema Operativo CentOS Linux 7.2.',
    'clusterInfo.power' => '?? xx TFlops de potencia de cálculo',
    'clusterInfo.software' => 'Software instalado',
    'clusterInfo.programmingLanguagues' => 'Lenguajes de programación soportados',
    'clusterInfo.perl' => 'Perl',
    'clusterInfo.python' => 'Python',
    'clusterInfo.php' => 'PHP',
    'clusterInfo.java' => 'Java',
    'clusterInfo.ruby' => 'Ruby',
    'clusterInfo.math' => 'Matemáticas',
    'clusterInfo.physic' => 'Física',
    'clusterInfo.chemistry' => 'Química',
    'clusterInfo.bioinformatics' => 'Bioinformática',
    'clusterInfo.parallel' => 'Sistema de paralelización',
    'clusterInfo.OPENMPI' => 'OpenMPI',
    'clusterInfo.extraInfo' => '<br><b>Nota:</b> Si necesita una solución personalizada, no dude en contactar con nosotros a través de la dirección',
    'clusterInfo.slurm' => 'Sistema de colas',
    'clusterInfo.slurm1' => 'El clúster cuenta con el siguiente sistema de colas:',
    'clusterInfo.slurm.day' => 'Cola <b>diaria</b>. Los trabajos que se ejecuten en esta cola pueden durar como máximo 1 día. Limitada a 120 cores/usuario.',
    'clusterInfo.slurm.day.example' => 'srun -n1 -N1 -p day hostname',
    'clusterInfo.slurm.week' => 'Cola <b>semanal</b>. Los trabajos que se ejecuten en esta cola pueden durar como máximo 7 días. Limitada a 120 cores/usuario.',
    'clusterInfo.slurm.week.example' => 'srun -n1 -N1 -p week hostname',
    'clusterInfo.slurm.week2' => 'Cola <b>bimensual</b>. Los trabajos que se ejecuten en esta cola pueden durar como máximo 14 días. Limitada a 80 cores/usuario.',
    'clusterInfo.slurm.week2.example' => 'srun -n1 -N1 -p week2 hostname',
    'clusterInfo.slurm.month' => 'Cola <b>mensual</b>. Los trabajos que se ejecuten en esta cola pueden durar como máximo 30 días. Limitada a 60 cores/usuario.',
    'clusterInfo.slurm.month.example' => 'srun -n1 -N1 -p month hostname',
    'clusterInfo.constraint' => 'Características de los nodos',
    'clusterInfo.constraint1' => 'Los nodos permiten satisfacer necesidades específicas en función de sus características:',
    'clusterInfo.constraint.set1' => '<b>SET1:</b> Hace referencia al conjunto de nodos nodo01-nodo07.',
    'clusterInfo.constraint.web' => '<b>WEB:</b> Hace referencia al nodo nodo08, encargado de realizar las peticiones solicitadas por el servidor web.',
    'clusterInfo.constraint.gaussian' => '<b>GAUSSIAN:</b> Hace referencia al conjunto de nodos nodo09-nodo12, que cuentan con mayor capacidad de almacenamiento.',
    'clusterInfo.constraint.gpu' => '<b>GPU:</b> Hace referencia al nodo nodo13, que cuenta con GPU.',
    'clusterInfo.constraint.set2' => '<b>SET2:</b> Hace referencia al conjunto de nodos nodo14-nodo31.',
    'clusterInfo.constraint.example' => 'srun --constraint="SET1" hostname',
    'clusterHowTo.intro' => 'Cómo hacer uso del clúster de supercomputación',
    'clusterHowTo.text1' => 'Registro en el clúster',
    'clusterHowTo.text2' => 'Para poder hacer uso del clúster de supercomputación del C3UPO, primero es necesario completar los datos de registro en la pestaña <a onclick="openTab(\'loadRegistration\');"><b>Registrarse</b></a>. La petición será recibida por la Administración del clúster, que posteriormente facilitará al usuario su nombre de usuario y una contraseña temporal de acceso al sistema.',
    'clusterHowTo.text3' => 'Conexión al cluster',
    'clusterHowTo.text4' => 'Para poder hacer uso del clúster, es necesario acceder mediante SSH al nodo maestro. Trabajando con Linux o MacOs, se puede hacer uso del terminal; en caso de usar Windows, se puede utilizar alguna herramienta como PuTTY o Cygwin.',
    'clusterHowTo.access' => '> ssh usuario@servidor.cluster',
    'clusterHowTo.text5' => 'El usuario recibirá la dirección del servidor del clúster al darse de alta. Una vez que el acceso se realice correctamente, el usuario se ubicará en su carpeta HOME (/home/<i>usuario</i>) dentro del nodo00. En este nodo <b>no</b> se debe de ejectuar ningún programa; para ello se deben usar el resto de nodos como se detalla a continuación.',
    'clusterHowTo.text6' => 'Uso del clúster',
    'clusterHowTo.text7' => 'El clúster cuenta con un sistema de colas encargado de repartir las diferentes tareas por los nodos existentes. De este modo, el usuario, a través de comandos, sólo tendrá que lanzar su aplicación y el gestor de cola se encargará de encontrar nodos libres en los que ejecutar los cálculos. En caso de que estén todos ocupados, el gestor de colas se encargará de poner la tarea en espera y de lanzarla cuando haya recursos disponibles, sin necesidad de que el usuario esté conectado esperando.
<p>Para poder hacer un uso responsable del clúster hay que tener una serie de pautas en mente:</p>
<ul>
 <li>No se deben instalar aplicaciones en el directorio HOME.</li>
 <li>No se deben realizar cálculos en el nodo maestro (nodo00).</li>
 <li>Para hacer cálculos en el clúster, hay que ejecutar el software mediante el gestor de colas.</li>
 <li>Reservar un número de nodos ajustado a las necesidades reales.</li>
 <li>Marcar un tiempo de ejecución acorde con los cálculos que se van a llevar a cabo, así se evitará que haya tareas malgastando recursos de forma innecesaria.</li>
 <li>Cada usuario podrá utilizar un máximo de 120 cores simultáneamente (entre todas las colas).</li>
</ul>
',
    'clusterHowTo.text7b' => '<p>Para intercambiar ficheros entre un equipo y el clúster se pueden usar dos métodos:</p>
<ul>
<li><b>scp:</b> El comando <b>scp</b> en el terminal (sin estar conectado al clúster) para copiar ficheros entre las máquinas.</li>
',
    'clusterHowTo.text7c' => '<li><b>Cliente SFTP:</b> Como <b>Filezilla</b>, por ejemplo. Para ello, se debe descargar la aplicación en el equipo y usar las credenciales de acceso al clúster. A través de la aplicación, se podrá navegar por la carpeta <i>HOME</i> e intercambiar ficheros entre el quipo y el clúster.</li>
</ul>
',
    'clusterHowTo.copyFiles' => '#Copiar un archivo local a un destino remoto:
> scp /ruta/archivo-origen usuario@servidor.cluster:/ruta/directorio-destino/ <br>
#Copiar un archivo de un ordenador remoto al ordenador local:
> scp usuario@servidor.cluster:/ruta/archivo-origen /ruta/directorio-destino
',
    'clusterHowTo.text8' => 'Uso del sistema de colas',
    'clusterHowTo.slurm' => 'A continuación se van a detallar algunos de los comandos más utiles para gestionar correctamente tareas en el cluster. En cualquier caso, se puede obtener más información sobre los comandos existentes en el manual de',
    'clusterHowTo.text9' => 'Para ejecutar tareas en el clúster hay principalmente tres métodos:',
    'clusterHowTo.text10' => '1. Usar el comando <b>srun</b>.',
    'clusterHowTo.text11' => 'Con el comando <b>srun</b> se pueden ejecutar tareas en paralelo. Se pueden especificar, entre otras cosas, en qué cola queremos añadir nuestro trabajo (p), cuántas veces se necesita que se ejecute la tarea (n) y en cuántos nodos (N). Además, también podemos darle un nombre al trabajo para poder localizarlo posteriormente con mayor facilidad (J).',
    'clusterHowTo.run' => '> srun -n2 -N2 -p day -J user_task_run --label hostname',
    'clusterHowTo.text12' => '2. Usar el comando <b>salloc</b>.',
    'clusterHowTo.text13' => 'Con el comando <b>salloc</b> se reserva un espacio en un conjunto de nodos y, una vez hecha la reserva, se ejecutan los comandos necesarios. Es importante tener en cuenta que para poder hacer un uso correcto del clúster y aprovechar los recursos, hay que ejecutar los comandos haciendo uso de <b>srun</b>. Una vez que se hayan llevado a cabo las tareas, hay que liberar los recursos reservados con el comando <b>exit</b> o no serán liberados hasta salir del terminal. Al igual que con el comando <b>srun</b>, se puede especificar en qué cola queremos lanzar nuestro trabajo (p), cuántos nodos queremos reservar (N), en cuántos hilos queremos que se divida la tarea (n) y el nombre que se le quiere dar (J). Una vez hemos reservado el espacio podemos lanzar srun con los comandos que necesitemos, sin necesidad de volver a especificar los valores.',
    'clusterHowTo.salloc' => '> salloc -n2 -N2 -p day -J user_task_salloc -t=10
> srun --label hostname
> exit
',
    'clusterHowTo.text14' => '3. Usar el comando <b>sbatch</b>.',
    'clusterHowTo.text15' => 'Con el comando <b>sbatch</b> se envía a la cola un fichero batch. Por defecto, tanto la salida del fichero como la salida con los errores serán almacenadas en un fichero llamado slurm-x.out donde "x" es el ID de la tarea asignada por el gestor de cola; dicho fichero se almacenará en el directorio de trabajo actual. Esto puede ser modificado a través de los parámetros <i>-e</i> para especificar dónde se quieren almacenar los errores y <i>-o</i> para indicar dónde se quiere almacenar la salida. Además, se pueden utilizar en el nombre del fichero las variables %A, que será reemplezada con el ID de la tarea, y %a, que será sustituida por el índice del array.<br>
En el fichero batch debe ir la información sobre la cola en la que se van a ejecutar los cálculos (p), en cuántos nodos (N), así como en cuántos hilos como máximo se puede dividir el trabajo (n). También se le puede dar un nombre a la tarea (J).
',
    'clusterHowTo.text15Example1' => 'Se va a comenzar con un ejemplo de un programa que se va a ejecutar en un solo nodo y va a hacer uso de un solo core.
',
    'clusterHowTo.text15Example2' => 'A continuación se muestra un ejemplo de un programa que se ejecuta en un solo nodo pero que hace uso de varios cores: <b>proceso multicore</b>. Para este ejemplo se va a utilizar <b>blastp</b>, que se puede ejecutar en multicore y que tiene como curiosidad que, además de especificar en el el script el número de hilos en los que se dividirá el trabajo (n), hay que especificarlo en el comando (num_threads). En caso de que no se especifique este valor en el comando, se reservarán un número determinado de cores (n) que no serán utilizados; por lo que es importante recordar que sólo hay que reservar más de un core en caso de que el programa que vamos a ejecutar soporte multicore. También es importante recordar que hay programas, como por ejemplo blastp, que no pueden ser ejecutados en más de un nodo al mismo tiempo, por lo que si se especifica un N mayor que 1 se estarán reservando más nodos de los que se usarán, por lo que quedarán ociosos.
',
    'clusterHowTo.text15b' => 'Es importante tener en mente el parámetro <b>--array</b>, el cual sirve para ejecutar el mismo trabajo múltiples veces. Para poder ejecutar el comando sbatch con este parámetro hay que especificar los índices del array, ya sea a través de una lista o especificando un rango. Este parámetro también soporta el separador %X, con el cual se especifica que como máximo puede haber X iteraciones ejecutándose al mismo tiempo (este parámetro es opcional). Para poder hacer un uso completo de este parámetro es muy útil la variable <i>SLURM_ARRAY_TASK_ID</i>, la cual indica la iteración actual del programa. Como se ve en el siguiente ejemplo, esta variable puede servir para indicar al programa de una forma dinámica los parámetros de entrada que debe tomar a la hora de la ejecución. Es importante asegurarse de que existen los ficheros de entrada con el nombre de los índices que se especifican.
',
    'clusterHowTo.sbatch' => 'Contenido del fichero <i>programa.sh</i>:
<br><br>
#Este programa va a llamar a un script que se va a ejecutar en un solo nodo y utilizará un solo core: <br>
#!/bin/bash <br>
#SBATCH -o /home/user/outputs/programa_output_%A.out <br>
#SBATCH -e /home/user/errors/programa_error_%A.out <br>
#SBATCH -p UPO <br>
#SBATCH -N 1 <br>
#SBATCH -n 1 <br>
#SBATCH -J user_task_sbatch <br>
script.sh <br>
<br><br>
> sbtach programa.sh
',
    'clusterHowTo.sbatch2' => 'Contenido del fichero <i>programa.sh</i>:
<br><br>
#En este programa se va a hacer uso de un solo nodo pero se van a usar varios cores:<br>
#!/bin/bash <br>
#SBATCH -p UPO <br>
#SBATCH -N 1 <br>
#SBATCH -n 6 <br>
#SBATCH -J user_task_sbatch <br>
blastp -query /home/username/data.fasta -db /mnt/beegfs/DB/uniref/Uniref50/2017_8/uniref50.fasta -num_threads 6<br>
<br><br>
> sbtach programa.sh
',
    'clusterHowTo.sbatch3' => 'Contenido del fichero <i>programa.sh</i>:
<br><br>
#En este programa se va a hacer uso de un solo nodo, se van a usar varios cores y además se van a ejecutar varias iteraciones del mismo programa:<br>
#!/bin/bash <br>
#SBATCH -o /home/user/outputs/programa_output_%A_%a.out <br>
#SBATCH -e /home/user/errors/programa_error_%A_%a.out <br>
#SBATCH -p UPO <br>
#SBATCH -N 1 <br>
#SBATCH -n 6 <br>
#SBATCH -J user_task_sbatch <br>
#SBATCH --array=1-60%15 <br>
blastp -query /home/username/data_$SLURM_ARRAY_TASK_ID.fasta -db /mnt/beegfs/DB/uniref/Uniref50/2017_8/uniref50.fasta -num_threads 6<br>
<br><br>
> sbtach programa.sh
',
    'clusterHowTo.text16' => '<b>Nota:</b> Si va a ejecutar una tarea prolongada en el tiempo, es una buena práctica incluir en el fichero <i>programa.sh</i> algunos "puntos de depuración" para saber en qué estado se encuentra la ejecución.
',
    'clusterHowTo.sbatch4' => '...<br>
# Se imprime el ID del trabajo que se está ejecutando; siguiendo el ejemplo anterior irá de 1 a 16. <br>
echo "Mi trabajo ID: " $SLURM_ARRAY_TASK_ID <br>
...<br>
echo "Paso 1 Iniciado" >> my_program_status.txt<br>
...<br>
echo "Paso 1 Finalizado" >> my_program_status.txt<br>
...<br>
',
    'clusterHowTo.text17' => 'Para detener una tarea se puede usar el comando <b>scancel</b>. Este comando nos permite terminar trabajos de diferentes maneras. Si se ha especificado un nombre a la tarea, se puede cancelar usando el nombre asignado; en otro caso, habrá que indicar el identificador de la tarea.',
    'clusterHowTo.scancel' => '#Para cancelar una tarea por su nombre: <br>
> scancel -n user_task_sbatch <br><br>
#Cancela el trabajo con ID 1234:<br>
> scancel 1234
',
    'clusterHowTo.text18' => 'A través de <b>squeue</b> se puede conocer el estado actual de las tareas que se están ejecutando en el clúster. También permite visualizar solamente las tareas que pertenecen a un usuario en concreto (u) o las de una partición en particular (p).',
    'clusterHowTo.squeue' => '#Muestra las tareas en la partición UPO del usuario <i>nombre</i>:<br>
> squeue -p UPO -u nombre <br><br>
#Muestra información de las tareas especificadas: <br>
> squeue --name user_task_run,user_task_run2
',
    'clusterHowTo.text19' => 'Uso de software',
    'clusterHowTo.text20' => 'Todos los usuarios tienen acceso al software instalado en el clúster a través de la herramienta Environment Modules. Cada software se instala como módulo independiente, así como sus dependencias, y los usuarios pueden seleccionar en cada momento qué herramientas necesitan utilizar. Las dependencias se cargan automáticamente, facilitando esta tarea al usuario.',
    'clusterHowTo.text21' => 'Comandos esenciales para el uso de Modules:',
    'clusterHowTo.text22' => '#Mostrar todos los módulos (software) disponibles.<br>
> module avail <br><br>
#Cargar un módulo en concreto. <br>
> module load <i>módulo</i> <br><br>
#Mostrar los módulos actualmente cargados por el usuario. <br>
> module list <br><br>
#Salir de un módulo cargado. <br>
> module unload <i>módulo</i><br><br>
#Salir de todos los módulos cargados y limpiar.<br>
> module purge
',
    'clusterHowTo.text23' => 'Cuando haya disponible más de una versión del mismo software, será necesario especificar cuál se quiere cargar, salvo que haya una configurada por defecto. Siempre es de ayuda poder autocompletar gracias a la tecla de tabulación.<br><br>Todos estos comandos se pueden utilizar a través del terminal o en los scripts de Slurm para lanzar trabajos a la cola del clúster.<br><br>',
    'clusterHowTo.text24' => 'Instalación de software:',
    'clusterHowTo.text25' => 'Cuando un usuario necesite hacer uso de una herramienta que no esté actualmente instalada, podrá solicitar su instalación contactando con la Administración del clúster.<br><br>',
    'clusterHowTo.text26' => 'Software instalado:',
    'clusterHowTo.text27' => '<ul> <li>Anaconda</li> <li>BioPerl</li> <li>Cufflinks</li> <li>GROMACS</li> <li>HISAT2</li> <li>HTSeq</li> <li>LAMMPS</li> <li>MultiQC</li> <li>prokka</li> <li>QIIME2</li> <li>roary</li> <li>RSeQC</li> <li>sma3s -> incluye BLAST y BLAST+ y configura las siguientes variables de entorno: <ul> <li>$SMA3S -> ruta al fichero sma3s.pl a través del directorio /mnt/beegfs/uniprot/sma3s</li> <li>$UNIPROT -> ruta al directorio /mnt/beegfs/uniprot/uniprot</li> <li>$UNIREF -> ruta al directorio /mnt/beegfs/uniprot/uniref</li> </ul> </li> <li>SRA-Toolkit</li> <li>STAR</li> <li>StringTie</li> <li>TopHat</li> <li>Trinity</li> </ul>',
    'clusterHowTo.extraInfo' => '<br><b>Nota:</b> Si necesita una solución personalizada, no dude en contactar con nosotros a través de la dirección',
  ),
));


return $catalogue;
