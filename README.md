Resumen: Este módulo crea dos atributos, para cliente y para grupos de cliente, y muestra la información en el dashboard del cliente.

## Instalación

El módulo se encuentra en github bajo la rama master. 

Enlace https://github.com/davidredesit/beself

Será necesario descargarlo y copiar su contenido bajo la carpeta app/code.

Para aplicarlo se deberán lanzar los comandos bin/magento s:up y bin/magento c:c

### Qué hace el módulo en la base de datos

Crea una columna en la tabla customer_group, llamada is_b_to_b.

Crea un atributo de cliente llamado product_preference, y almacenará los datos en la tabla customer_entity_int.

## Operativa
1. Al acceder a los grupos de clientes veremos un nuevo campo llamado IsB2B (Distribuidor para es_ES)
   - Los clientes que pertenezcan a un grupo marcado con este flag, encontrarán en su dashboard un aviso conforme son Distribuidores.
2. Al acceder a la información del cliente, veremos un nuevo campo llamado Favourite Product Type.
   - Los clientes que tengan seleccionada alguna opción también verán un aviso en su dashboard.
3. Ambos campos son editables desde la página de editar grupos de clientes, y desde la ficha de un cliente en concreto.


