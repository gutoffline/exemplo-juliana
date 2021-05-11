### banco de dados
```sql
CREATE DATABASE exemplo_juliana;
```

### tabela de marcas
```sql
CREATE TABLE `exemplo_juliana`.`marca` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(50) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
```

### tabela de modelos
```sql
CREATE TABLE `exemplo_juliana`.`modelo` ( `id` INT NOT NULL AUTO_INCREMENT , `nome` VARCHAR(50) NOT NULL , `id_marca` INT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;

```

![img/exemplo.gif](img/exemplo.gif)



