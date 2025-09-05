# Kata de vacaciones anuales

Tu empresa necesita determinar los días de vacaciones anuales de cada uno de sus empleados para un año dado.

La aplicación recibe una fecha (eg: `01-06-2025`) y muestra el nombre de cada empleado junto con el número respectivo de días de vacaciones para ese año.

## Requisitos

1. Cada empleado tiene por defecto **24 días de vacaciones** por año
2. Un **contrato especial puede sobrescribir** la cantidad mínima de días de vacaciones
3. Los contratos que **comienzan durante el año** obtienen 1/12 de los días de vacaciones anuales por cada mes completo
4. Cada año en la empresa otorgará **un día adicional de vacaciones**, con un máximo de **seis días extra**
5. Los empleados que tienen **40 años o más** reciben un día adicional de vacaciones por cada 5 años de antigüedad en la empresa

### Lista de empleados:

| Nombre         | Fecha de nacimiento | Inicio de contrato | Contrato especial       | Razón      |
|----------------|---------------------|--------------------|-------------------------|------------|
| Marco Gil      | 26.01.2001          | 01.01.2024         | No                      | Caso 1     |
| Marco Sanchez  | 12.07.1999          | 01.01.2024         | Si (26 días vacaciones) | Caso 2     |
| Juan Perez     | 30.12.1997          | 01.01.2025         | No                      | Caso 3     |
| Laura Martinez | 09.06.1989          | 01.01.2018         | No                      | Caso 4     |
| Ana Gonzalez   | 26.01.1966          | 01.01.2014         | No                      | Caso 4 y 5 |

Usando el año **2025** como entrada (suponiendo `01-06-2025`) deberíamos obtener:

| Nombre         | Dias totales |
|----------------|--------------|
| Marco Gil      | 24           |
| Marco Sanchez  | 26           |
| Juan Perez     | 12           |
| Laura Martinez | 30           |
| Ana Gonzalez   | 32           |

# Configuración específica por lenguaje

## PHP con PHPUnit

1. Instalar [composer](https://getcomposer.org/) `curl -sS https://getcomposer.org/installer | php`
2. `composer install` (estando en la carpeta php)
3. `vendor/bin/phpunit` o `composer test`

### 📚 Documentación
- [PHPUnit](https://phpunit.readthedocs.io/)

## Javascript con Jest

1. Instalar [Node](http://nodejs.org/)
2. `npm install` (Estando en la carpeta javascript)
3. `npm test`

### 📚 Documentación
- [Jest](https://jestjs.io)

## [Typescript con Node](/typescript/README.md)

## Typescript con Deno

1. Instalar [Deno](https://deno.land/#installation)
2. `deno test` (Estando en la carpeta typescript)

### 📚 Documentación
- [Deno](https://deno.land/manual)
- [BDD module](https://deno.land/manual/testing/behavior_driven_development)
- [Expect module](https://deno.land/x/expect)

## Java con Junit y Mockito

1. Instalar las dependencias y tests con Maven [mvn test]
2. Ejecutar los tests con el IDE

### 📚 Documentación
- [JUnit](https://github.com/junit-team/junit/wiki)
- [Mockito](http://site.mockito.org/mockito/docs/current/org/mockito/Mockito.html)

## Scala con Munit y Scalacheck

1. `sbt` (en la carpeta scala)
2. `~test` para ejecutar los test en hot reload

### 📚 Documentación
- [Munit](https://scalameta.org/munit/docs/tests.html)
- [Scalacheck](https://github.com/typelevel/scalacheck/blob/main/doc/UserGuide.md) para testing basado en propiedades

### Linux/Mac
1. Instalar [SDKMan](https://sdkman.io/)
2. `sdk install java 11.0.12-open` instala OpenJDK
3. `sdk install sbt` una vez instalado SDKMan

### Windows
1. Instalar [OpenJDK](https://docs.microsoft.com/es-es/java/openjdk/download#openjdk-110141-lts--see-previous-releases)
2. Instalar [SBT](https://www.scala-sbt.org/download.html)

### Visual Studio Code
1. Descargar [Visual Studio Code](https://code.visualstudio.com/)
2. Instalar para VS Code [Metals](https://scalameta.org/metals/docs/editors/vscode)

## Kotlin con JUnit5 y MockK

1. Por consola: Puedes instalar dependencias y lanzar los tests con `gradlew test`
2. Usando IDE: Simplemente abre el proyecto desde el raiz de la plantilla Kotlin

### 📚 Documentación
- [JUnit5](https://junit.org/junit5/)
- [MockK](https://mockk.io/)

## C# con xUnit (con FluentAsertion) y NSubstitute (para mock)

1. Instalar Microsoft Visual Studio Community 2022
2. Abre el proyecto y se descargaran automáticamente los paquetes Nuguet necesarios

### 📚 Documentación
- [xUnit](https://xunit.net/)
- [NSubstitute](https://nsubstitute.github.io/help.html)
- [FluentAssertions](https://fluentassertions.com/introduction)

## Python

1. Instalar python 3.x
2. Una vez descargado el código fuente dentro de la carpeta */python/ creamos un virtual enviroment:
3. `python3 -m venv env`
4. Activamos en virtual environment:
- windows: `.\env\Scripts\activate.bat`
- linux/mac: `source env/bin/activate`
5. `pytest` para ejecutar los tests.

## Go (Golang) con testing (standard library)

1. Instalar [Go](https://go.dev/dl/)
2. `go test -v` (en la carpeta con el archivo xxx_test.go)

### 📚 Documentación
- [Go](https://go.dev/doc/)
- [Testing Package](https://pkg.go.dev/testing)
