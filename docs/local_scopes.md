# Local Scopes

This section covers various local scopes available in the package.

## Available Scopes

- [ActiveScope](#activescope) - Filter records based on active status.
- [ArchivedScope](#archivedscope) - Filter records based on archived status.
- [AttendanceScope](#attendancescope) - Filter records based on attendance status.
- [DateScope](#datescope) - Filter records based on specific date conditions.
- [MonthScope](#monthscope) - Filter records based on specific months.
- [PaginationDataScope](#paginationdatascope) - Custom pagination based on request parameters.
- [PublishedScope](#publishedscope) - Filter records based on published status.
- [StatusScope](#statusscope) - Filter records based on status.
- [VerificationScope](#verificationscope) - Filter records based on verification status.
- [YearScope](#yearscope) - Filter records based on specific years.

---

## Model Usage

To use any of the provided scopes in your Eloquent model, simply import the required scope traits.

```php
use Slokee\Supporter\Scopes\Local\ActiveScope;
use Slokee\Supporter\Scopes\Local\PublishedScope;

class Post extends Model
{
    use ActiveScope, PublishedScope;
}
```

Once added, you can apply the scopes to your queries:

```php
Post::active()->published()->get();
```

---

## ActiveScope

Scope is used to filter data from active and inactive records.

### Methods
- `scopeActive()` - Retrieves active records.
- `scopeInActive()` - Retrieves inactive records.

---

## ArchivedScope

Scope to filter data based on archived status.

### Methods
- `scopeArchived()` - Retrieves archived records.
- `scopeUnarchived()` - Retrieves unarchived records.

---

## AttendanceScope

Scope a query to only include records with 'Present' or 'Absent' status.

### Methods
- `scopePresent()` - Retrieves records marked as 'Present'.
- `scopeAbsent()` - Retrieves records marked as 'Absent'.

---

## DateScope

These scopes filter data based on various date methods on any date or datetime fields of the model.

### Methods
- `scopeDate($column, $date)` - Filters records by a specific date.
- `scopeDateAfterOrEqual($column, $date)` - Filters records after or equal to a given date.
- `scopeDateBeforeOrEqual($column, $date)` - Filters records before or equal to a given date.
- `scopeDateBetween($column, $startDate, $endDate)` - Filters records between two dates.

---

## MonthScope

Function will perform scope filtering on date/datetime columns of the model.

### Methods
- `scopeMonth($column, $month)` - Filters records for a specific month.
- `scopeYearMonth($column, $year, $month)` - Filters records for a specific year and month.
- `scopeCurrentMonth($column)` - Filters records for the current month.
- `scopeLastMonth($column)` - Filters records for the last month.

---

## PaginationDataScope

Custom scope to paginate model query into pagination based on request params.

### Methods
- `scopePaginateData($request = null)` - Paginates the query based on request parameters.

---

## PublishedScope

Scope to filter records based on published status.

### Methods
- `scopePublished()` - Retrieves published records.
- `scopeUnpublished()` - Retrieves unpublished records.

---

## StatusScope

Scope to filter records based on status.

### Methods
- `scopeActive()` - Retrieves active records.
- `scopeInActive()` - Retrieves inactive records.

---

## VerificationScope

Scope a query to filter verified or unverified records.

### Methods
- `scopeVerified()` - Retrieves verified records.
- `scopeUnverified()` - Retrieves unverified records.

---

## YearScope

Trait to provide various year-based filtering scopes.

### Methods
- `scopeYear($column, $year)` - Filters records by a specific year.
- `scopeCurrentYear($column)` - Filters records from the current year.
- `scopeLastYear($column)` - Filters records from the last year.
- `scopeNextYear($column)` - Filters records from the next year.
- `scopeYearRange($column, $startYear, $endYear)` - Filters records within a specific year range.
- `scopeYearCondition($column, $condition, $year)` - Filters records based on a given year condition.

