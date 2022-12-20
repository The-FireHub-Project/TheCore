# Release Notes for v0.x.x.pre-alpha

## [Unreleased](https://github.com/The-FireHub-Project/Documentor/compare/develop-pre-alpha-m1...develop-pre-alpha)

[v0.2.0](https://github.com/The-FireHub-Project/Documentor/compare/v0.2.0-alpha.1...develop-pre-alpha-m1) - (2022-12-19)

### Added

- Added NOW enum to TimeName enum, created Unit and Ordinal enums ([#10](https://github.com/The-FireHub-Project/TheCore/issues/10), [419d735](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/419d735))
- Created Time low level class ([#10](https://github.com/The-FireHub-Project/TheCore/issues/10), [9e7e559](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/9e7e559))
- Created Year, Day, Month, Week enums ([#10](https://github.com/The-FireHub-Project/TheCore/issues/10), [848af53](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/848af53))
- Created Country and Continent enums ([#10](https://github.com/The-FireHub-Project/TheCore/issues/10), [3d61551](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/3d61551))
- Created Time and TimeZone format enums ([#10](https://github.com/The-FireHub-Project/TheCore/issues/10), [27f75f9](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/27f75f9))
- Created datetime support classes ([#10](https://github.com/The-FireHub-Project/TheCore/issues/10), [24e714d](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/24e714d))

### Changed
- Constansts refactor ([#9](https://github.com/The-FireHub-Project/TheCore/issues/9), [9ab9b65](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/9ab9b65))
- Various changed to low level classes ([#9](https://github.com/The-FireHub-Project/TheCore/issues/9), [3d5e5f2](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/3d5e5f2))
- In registerConstants method, added constant from support ([#9](https://github.com/The-FireHub-Project/TheCore/issues/9), [5604655](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/5604655))
- Transfered timezone methods to seperate low level class ([#10](https://github.com/The-FireHub-Project/TheCore/issues/10), [b0db622](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/b0db622))
- Changed default $format in format method in DateAndTime low level class ([#10](https://github.com/The-FireHub-Project/TheCore/issues/10), [6163241](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/6163241))

### Removed

- Removed FIRST_DAY and LAST_DAY from DayName enum ([#10](https://github.com/The-FireHub-Project/TheCore/issues/10), [1e76769](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/1e76769))

## [v0.1.3](https://github.com/The-FireHub-Project/TheCore/compare/v0.1.3-alpha.1...develop-pre-alpha-m1) - (2022-12-09)

### Added
- Created Data Type and TypeType enum ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [d7d06c2](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/d7d06c2))
- Created Json Encode and Decode enum ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [b9db72d](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/b9db72d))
- Created Data and DataIs low level classes ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [e4af635](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/e4af635))
- Created Order and Sort enums ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [ecd94af](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/ecd94af))
- Created Arr low level class ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [b31c156](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/b31c156))
- Created Iterator low level class ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [84cd11c](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/84cd11c))
- Created Cls and Obj low level classes ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [1bb144a](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/1bb144a))
- Created Side enum ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [0bb1ead](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/0bb1ead))
- Created StrCase and Encoding enum ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [bbc2de7](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/bbc2de7))
- Added treatPhpDocTypesAsCertain to phpstan.neon [cf93638](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/cf93638))
- Created Str low level classes ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [4d0a4b7](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/4d0a4b7))
- Created file enums: Lock, Permission and Mode ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [f36e852](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/f36e852))
- Created File and Folder low level classes ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [143fc77](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/143fc77))
- Created TimeZone enum ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [b5c8524](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/b5c8524))
- Created DateAndTime and Date low level classes ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [4022c4d](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/4022c4d))
- Created date and time enums ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [c55169a](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/c55169a))
- Created comparison enum ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [923dadb](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/923dadb))
- Created Base and RoundMode enums for numeric values ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [32d0766](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/32d0766))
- Added varoius math constants ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [ed569bb](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/ed569bb))
- Created number low level classes ([#7](https://github.com/The-FireHub-Project/TheCore/issues/7), [786d91f](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/786d91f))

### Changed

- Some system constants now have new file ([3e5bf69](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/3e5bf69))

### Removed
- Removed optional from all parameters in register method and replaced them with class properties in Autoload class ([f6f3cd0](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/f6f3cd0))
- Removed unused parameter $class_fqn in callable method in Autoload class ([11294e3](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/11294e3))
- Removed checkTooWideReturnTypesInProtectedAndPublicMethods in phpstan.neon ([5cb1d0d](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/5cb1d0d))

## [v0.1.2](https://github.com/The-FireHub-Project/TheCore/compare/v0.1.2-alpha.1...develop-pre-alpha-m1) - (2022-11-23)

### Added
- Created Kernel classes and enum ([#6](https://github.com/The-FireHub-Project/TheCore/issues/6), [c800ef8](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/c800ef8))
- In main FireHub class, boot from Kernel now accepts Kernel as parameter and return response from it, and created kernel method ([#6](https://github.com/The-FireHub-Project/TheCore/issues/6), [824d269](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/824d269))

## [v0.1.1](https://github.com/The-FireHub-Project/TheCore/compare/v0.1.1-alpha.1...develop-pre-alpha-m1) - (2022-11-22)

### Added
- Created Suffix and Prefix enum for file names ([#5](https://github.com/The-FireHub-Project/TheCore/issues/5), [53b9adb](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/53b9adb))
- Created path that contain all system path constants required for successful app booting ([#5](https://github.com/The-FireHub-Project/TheCore/issues/5), [2b392f6](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/2b392f6))
- Created autoload init class ([#5](https://github.com/The-FireHub-Project/TheCore/issues/5), [f09a210](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/f09a210))
- Created main FireHub class ([#5](https://github.com/The-FireHub-Project/TheCore/issues/5), [9173313](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/9173313))

## [v0.1.0](https://github.com/The-FireHub-Project/TheCore/compare/v0.1.0-alpha.1...develop-pre-alpha-m1) - (2022-11-15)

### Added
- Created plantUML theme ([#4](https://github.com/The-FireHub-Project/TheCore/issues/4), [6673143](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/6673143))
- Created landing files for phar archive ([#5](https://github.com/The-FireHub-Project/TheCore/issues/5), [7a57298](https://github.com/The-FireHub-Project/TheCore/pull/2/commits/7a57298))