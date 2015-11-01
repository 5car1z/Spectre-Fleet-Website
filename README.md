#Spectre Fleet Website

![Spectre Logo](http://i.imgur.com/orGZt1t.png)

[http://spectrefleet.com/](http://spectrefleet.com/)

#Contributing
If you want to help contribute to the website development please send a pull request (guidance below) with your proposed changes and improvements.

##Pull Requests
See the following instructions for submitting a pull request to the repository.

##Fork the Repository
In the top-right corner of the page, click Fork.

![Fork Button](https://i.gyazo.com/9aff62add262688b8b3e5d895de6d0f2.png)

##Clone your Forked Repository
On **your own** new forked repository page copy the clone URL by clicking the clipboard button on the right.

![Clipboard Button](https://help.github.com/assets/images/help/repository/clone-repo-clone-url-button.png)

Clone the repository into your local file-system using the copied URL:

```bash
$ git clone https://github.com/username/Spectre-Fleet-Website.git
```

##Sync your Forked Repository
Change into your local forked repository:

```bash
$ cd Spectre-Fleet-Website
```

Add the original *upstream* Spectre Fleet website repository to your local fork's remotes with:

```bash
$ git remote add upstream https://github.com/Spectre-Gaming/Spectre-Fleet-Website.git
```

You can see and confirm the remote has been added by using:

```bash
$ git remote -v
```

```bash
origin	  https://github.com/username/Spectre-Fleet-Website.git (fetch)
origin	  https://github.com/username/Spectre-Fleet-Website.git (push)
upstream	https://github.com/Spectre-Gaming/Spectre-Fleet-Website.git (fetch)
upstream	https://github.com/Spectre-Gaming/Spectre-Fleet-Website.git (push)
```

##Open a Pull Request
Once you have made your changes through commits or a new branch in the local fork; open a pull request to this repository through GitHub's website.

Details of how to do this are provided at this page:

> https://help.github.com/articles/using-pull-requests/

Please add any helpful comments to the pull request description, and for a better idea of what help is currently needed with the website see the issues page or contact - [JayneF](https://github.com/JayneF) / [Ibn Khatab](https://github.com/unkwntech)

---

#For Collaborators with Write Access
If you are a collaborator **and** have been given **write access** to the repository, instead simply clone the website repo by running:

```bash
$ git clone https://github.com/Spectre-Gaming/Spectre-Fleet-Website.git
$ cd Spectre-Fleet-Website/
```

Then make sure to initialise and clone the submodules:

```bash
$ git submodule init
$ git submodule update
```
