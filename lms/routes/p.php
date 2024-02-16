Route::middleware(['auth', 'student'])->group(function () {
    Route::get('/student/dashboard', [StudentDashboardController::class, 'index'])->name('student.dashboard');
    Route::get('/classes', [StudentClassesController::class, 'index'])->name('classes.index');
    Route::get('/announcements', [StudentAnnouncementsController::class, 'index'])->name('announcements.index');
    Route::get('/quizzes', [StudentsStudentsController::class, 'quizzes'])->name('student.quizzes');
    Route::get('/grades', [StudentsStudentsController::class, 'grades'])->name('student.grades');
    Route::get('/class-materials', [StudentsStudentsController::class, 'classMaterials'])->name('student.class_materials');
    Route::get('/class-materials/{id}/download', 'App\Http\Controllers\StudentsStudentsController@download')->name('class-materials.download');

});