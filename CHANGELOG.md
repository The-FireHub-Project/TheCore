# Release Notes for v0.x.x.pre-alpha

## [Unreleased](https://github.com/The-FireHub-Project/Documentor/compare/develop-pre-alpha-m1...develop-pre-alpha)

### Added
- Created Data Type and TypeType enum ([#7](https://github.com/The-FireHub-Project/FireHub/issues/7), [d7d06c2](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/d7d06c2))
- Created Json Encode and Decode enum ([#7](https://github.com/The-FireHub-Project/FireHub/issues/7), [b9db72d](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/b9db72d))
- Created Data and DataIs low level classes ([#7](https://github.com/The-FireHub-Project/FireHub/issues/7), [e4af635](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/e4af635))
- Created Order and Sort enums ([#7](https://github.com/The-FireHub-Project/FireHub/issues/7), [ecd94af](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/ecd94af))
- Created Arr low level class ([#7](https://github.com/The-FireHub-Project/FireHub/issues/7), [b31c156](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/b31c156))
- Created Iterator low level class ([#7](https://github.com/The-FireHub-Project/FireHub/issues/7), [84cd11c](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/84cd11c))

### Removed
- Removed optional from all parameters in register method and replaced them with class properties in Autoload class ([f6f3cd0](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/f6f3cd0))
- Removed unused parameter $class_fqn in callable method in Autoload class ([11294e3](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/11294e3))
- Removed checkTooWideReturnTypesInProtectedAndPublicMethods in phpstan.neon ([5cb1d0d](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/5cb1d0d))

## [v0.1.2](https://github.com/The-FireHub-Project/TheCore/compare/v0.1.2-alpha.1...develop-pre-alpha-m1) - (2022-11-23)

### Added
- Created Kernel classes and enum ([#6](https://github.com/The-FireHub-Project/FireHub/issues/6), [c800ef8](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/c800ef8))
- In main FireHub class, boot from Kernel now accepts Kernel as parameter and return response from it, and created kernel method ([#6](https://github.com/The-FireHub-Project/FireHub/issues/6), [824d269](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/824d269))

## [v0.1.1](https://github.com/The-FireHub-Project/TheCore/compare/v0.1.1-alpha.1...develop-pre-alpha-m1) - (2022-11-22)

### Added
- Created Suffix and Prefix enum for file names ([#5](https://github.com/The-FireHub-Project/FireHub/issues/5), [53b9adb](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/53b9adb))
- Created path that contain all system path constants required for successful app booting ([#5](https://github.com/The-FireHub-Project/FireHub/issues/5), [2b392f6](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/2b392f6))
- Created autoload init class ([#5](https://github.com/The-FireHub-Project/FireHub/issues/5), [f09a210](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/f09a210))
- Created main FireHub class ([#5](https://github.com/The-FireHub-Project/FireHub/issues/5), [9173313](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/9173313))

## [v0.1.0](https://github.com/The-FireHub-Project/TheCore/compare/v0.1.0-alpha.1...develop-pre-alpha-m1) - (2022-11-15)

### Added
- Created plantUML theme ([#4](https://github.com/The-FireHub-Project/FireHub/issues/4), [6673143](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/6673143))
- Created landing files for phar archive ([#5](https://github.com/The-FireHub-Project/FireHub/issues/5), [7a57298](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/7a57298))