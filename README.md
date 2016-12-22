# Test functional test
The extension can be used to check if the basic implementation of functional test work properly.

# Hot to test

- Create the following composer json

```json
{
  "name": "functionaltest-project",
  "require": {
    "typo3/cms": "7.6.*",
    "citeq/functionaltest-test": "dev-master"
  },
  "require-dev": {
    "phpunit/phpunit": "4.8.*"
  },
  "config": {
    "bin-dir": "bin/",
    "github-protocols": ["https"],
    "secure-http": false,
    "discard-changes": true,
    "config": {
      "preferred-install": {
        "typo3/cms": "source",
        "*": "dist" 
      }
    }
  },
  "extra": {
    "typo3/cms": {
      "cms-package-dir": "{$vendor-dir}/typo3/cms",
      "web-dir": "WWW"
    }
  }
}
```
- run composer install

- Install TYPO3 instance (using the install wizard)

- Goto directory ***WWW*** and execute: 

```
../bin/phpunit --process-isolation --bootstrap typo3/sysext/core/Build/FunctionalTestsBootstrap.php typo3conf/ext/functionaltest_test/Tests/Functional/
```
