package main

import (
	"fmt"
	"net/http"
	"strconv"

	"github.com/labstack/echo/v4"
)

type pelajarDTO struct {
	Nama string `json:"name"`
	Nim  string `json:"nim"`
	Ipk  string `json:"ipk"`
}

func main() {
	e := echo.New()
	e.GET("/", func(c echo.Context) error {
		return c.String(http.StatusOK, "Hello, World!")
	})

	e.GET("/show", show)
	e.GET("/users/:id", getUser)
	e.GET("/pelajar", pelajar)
	e.GET("math", math)
	e.Logger.Fatal(e.Start(":8000"))
}

func getUser(c echo.Context) error {
	// User ID from path `users/:id`
	id := c.Param("id")
	return c.String(http.StatusOK, id)
}

func show(c echo.Context) error {
	// Get team and member from the query string
	team := c.QueryParam("team")
	member := c.QueryParam("member")
	return c.String(http.StatusOK, "team:"+team+", member:"+member)
}

func pelajar(c echo.Context) error {
	return c.JSON(http.StatusOK, []pelajarDTO{
		{
			Nama: "alfianizzah",
			Nim:  "23423423423",
			Ipk:  "5.9",
		},
		{
			Nama: "udin",
			Nim:  "11232",
			Ipk:  "5.9",
		},
		{
			Nama: "prayoso",
			Nim:  "121221",
			Ipk:  "9.9",
		},
		{
			Nama: "anabel",
			Nim:  "212212",
			Ipk:  "3.9",
		},
	})
}

func math(c echo.Context) error {
	bil1 := c.QueryParam("a")
	bil2 := c.QueryParam("b")

	a, err := strconv.ParseInt(bil1, 10, 64)
	if err != nil {
		return c.String(http.StatusBadRequest, "invalid value for a")
	}
	b, err := strconv.ParseInt(bil2, 10, 64)
	if err != nil {
		return c.String(http.StatusBadRequest, "invalid value for b")
	}

	jumlah := a + b
	return c.String(http.StatusOK, "Jumlah : "+fmt.Sprint(jumlah))
}
