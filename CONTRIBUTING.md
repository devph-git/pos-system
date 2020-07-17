## Contributing Guide

Contributing to `devph-io/pos-system` is fairly easy. This document will help you set up and run both UI and API components to get you started.

We've prepared guide templates for all contributors to reuse. And, we require everyone to take some time to review and strictly abide by the following guidelines.

- [Code of conduct](CODE_OF_CONDUCT.md)
- [Issue Reporting](ISSUE_REPORTING.md)
- [Pull Requests](PULL_REQUEST.md)

### Dependencies

- Node.js (comes with a bundles npm)
- Yarn (if you prefer not to use npm)
- Git
- Docker (Optional)
- PHP 7.2.5 and up

### Frontend w/ Vue
- check FE setup [here](./ui/README.md)

### Backend w/ Laravel
- read BE setup [here](./api/README.md)

### Build and Publish

### Submitting changes

- Check out a new branch from `dev` or `master` with prefix `feature/[card_id]` or `bugfix/[issue_id]` depending on what the intention of your contribution.
    ````
    $ git checkout -b bugfix/11483-fix-lazy-loading-components
    $ git checkout -b feature/41119900-add-contribution-docs-and-readme
    ````
    > We strongly suggest using `gitFlow` for easier branching management
- Make your changes
- Commit your changes
    ```
    $ git commit -m "[card_id or issue_id]: this is where you describe the commit"
    ```
    > Use the `card_id` or `issue_id` as commit prefix
- Submit a pull request using our [template](PULL_REQUEST.md)