# AGENT CONTRACT

## Objective
Maintain a Laravel app where:

- `/hello` returns "Hello World"
- All changes must pass CI
- Changes must go through pull requests

## Rules

1. Do not modify CI workflow unless explicitly instructed.
2. Do not break existing tests.
3. All new features must include tests.
4. Keep changes minimal and focused.
5. Prefer modifying existing code over adding new files.

## Verification

The system is correct if:

- `php artisan test` passes
- `/hello` returns "Hello World"

