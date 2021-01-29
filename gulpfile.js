var gulp = require("gulp");
var less = require("gulp-less");

var plumber = require("gulp-plumber");

var postcss = require("gulp-postcss");
var autoprefixer = require("autoprefixer");

var cssmin = require("gulp-csso");
var jsmin = require("gulp-uglify-es").default;

var rename = require("gulp-rename");

var imagemin = require("gulp-imagemin");

//var webp = require("gulp-webp");

var svgsprite = require("gulp-svgstore");

var del = require("del");

var server = require("browser-sync").create();

function clean () {
	return del(["web/*"]);
}

function copy () {
	return gulp.src([
		"source/fonts/**/*.{svg,eot,ttf,woff,woff2}",
		"source/libs/**/*",
		"source/img/**/*.{gif,svg,ico}",
		"source/video/**/**/*",
    "source/*.html"
	], {
		base: "source"
	})
	.pipe(gulp.dest("web"));
}

function styles () {
	return gulp.src("source/less/*.less")
		.pipe(plumber())

		.pipe(less())

    .pipe(gulp.dest("web/css"))

		.pipe(postcss([
			autoprefixer()
		]))

		.pipe(cssmin())

		.pipe(rename({
			suffix: ".min"
		}))

		.pipe(gulp.dest("web/css"))

		.pipe(server.stream());
}

function scripts () {
    return gulp.src("source/js/*.js")
        .pipe(gulp.dest("web/js"))

        .pipe(jsmin())

        .pipe(rename({
					suffix: ".min"
				}))

        .pipe(gulp.dest("web/js"))

				.pipe(server.stream());
}

function images () {
  return gulp.src("source/img/**/*.{png,jpg}")
  .pipe(imagemin([
    imagemin.optipng({optimizationLevel: 3}),
    imagemin.jpegtran({progressive: true})
	//	imagemin.svgo()
  ]))

  .pipe(gulp.dest("web/img"));
}

// function webpfun () {
// 	return gulp.src("web/img/**/*.{png,jpg}")
//
// 	.pipe(webp())
//
// 	.pipe(gulp.dest("web/img"));
// }

function sprite () {
	return gulp.src("source/img/icon-*.svg")
		.pipe(svgsprite ({
			inlineSvg: true
		}))
		.pipe(rename("sprite.svg"))

		.pipe(gulp.dest("web/img"));
}

function php () {
	return gulp.src("source/*.php")

	.pipe(gulp.dest("web"));
}

function watch () {
	server.init({
		proxy: "localhost"
	});

	gulp.watch("source/less/**/*.less", styles)
	gulp.watch("source/js/*.js", scripts)
	gulp.watch("source/fonts/*", copy)
  gulp.watch("source/*.html", copy)
  gulp.watch("source/libs/**/*", copy)
	gulp.watch("source/video/*", copy)
	gulp.watch("source/img/**/*.{png,jpg}", gulp.series(images)) //, webpfun
	gulp.watch("source/img/**/*.{svg,gif}", gulp.series(copy, sprite)) //
	gulp.watch("source/*.php", php).on("change", server.reload);
}

gulp.task("clean", clean);
gulp.task("copy", copy);
gulp.task("styles", styles);
gulp.task("scripts", scripts);
gulp.task("images", images);
//gulp.task("webp", webpfun);
gulp.task("php", php);
gulp.task("watch", watch);
gulp.task("sprite", sprite);

gulp.task("web", gulp.series(clean, copy, gulp.parallel(styles, scripts), images, sprite, php)); //webpfun,

gulp.task("dev", gulp.series("web", "watch"));
