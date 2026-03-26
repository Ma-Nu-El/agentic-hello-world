# AGENT CONTRACT

## Objective
Maintain a Laravel app where:

- /hello returns "Hello World"
- all changes pass CI
- all changes go through pull requests

## Operating Rules

1. Never commit or push directly to main.
2. Work only on feature branches.
3. Do not modify CI workflow unless explicitly instructed.
4. Do not break existing tests.
5. All behavior changes must include or update tests.
6. Keep changes minimal, focused, and reversible.
7. Prefer modifying existing files over adding new files.
8. Before proposing merge, run local verification commands.

## Local Verification

Run:

php artisan test

## Merge Conditions

A change is acceptable only if:

- php artisan test passes locally
- GitHub Actions CI passes
- the change is submitted through a pull request

## Protected Invariant

The system must continue to satisfy:

- /hello returns "Hello from agent"
